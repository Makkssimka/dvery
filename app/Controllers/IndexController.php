<?php

namespace App\Controllers;

use App\Helpers\ConfigWrite;
use App\Models\Accessory;
use App\Models\Door;
use Config;
use Core\Request;
use Core\View;

class IndexController
{

    private $menuList = [
        'home' => ['url' => '/', 'name' => 'Главная', 'active' => false],
        'catalog' => ['url' => 'catalog', 'name' => 'Каталог', 'active' => false],
        'contact' => ['url' => 'contact', 'name' => 'Где купить', 'active' => false],
        'stock' => ['url' => 'stock', 'name' => 'Акции', 'active' => false]
    ];

    public function index(Request $request){

        $data['title'] = Config::$siteName;
        $data['description'] = Config::$siteDescription;
        $data['scripts'] = ['index.js'];

        View::view('index', $data);
    }

    public function about(){
        print_r('About Page');
    }

    public function catalog(Request $request){

        $type = $request->input('type');
        $data['type'] = $type;

        $data['title'] = 'Каталог межкомнатных дверей и входных дверей';
        $data['description'] = 'Подбирите межкомнатную или входную дверь используя удобные фильтры';
        $data['scripts'] = ['main.js','catalog.js'];

        $this->menuList['catalog']['active'] = true;
        $data['menu'] = $this->menuList;

        View::view('catalog', $data);

    }

    public function door(Request $request){

        $id = $request->input('id');
        if(!is_numeric($id)){
            $error = new ErrorController();
            $error->pageNoFound();
            exit();
        }


        $door = Door::find($id);

        $data['desc'] = json_decode($door->description);
        $data['images'] = json_decode($door->images);

        $data['door'] = $door;
        $doorType = ($door->category == 'interior')?'межкомнатная ':'входная ';
        $data['title'] = 'Дверь '.$doorType.$door->name;
        $data['description'] = 'Дверь '.$doorType.$door->name;
        $data['scripts'] = ['main.js','door.js'];

        ++$door->views;
        $door->save();

        $data['menu'] = $this->menuList;

        View::view('door', $data);
    }

    public function doorSystem(Request $request){

        $data['title'] = 'Системы межкомнатных дверей';
        $data['description'] = 'Подберите наиболее подходящие по интерьеру систему межкомнатных дверей';
        $data['scripts'] = ['main.js', 'system.js'];

        $data['menu'] = $this->menuList;

        View::view('system', $data);
    }

    public  function contact(Request $request){
        $data['title'] = 'Адреса наших магазинов межкомнатных и входных дверей';
        $data['description'] = 'Адреса наших магазинов, где можно приобрести межкомнатные и входные двери';
        $data['scripts'] = ['main.js', 'contact.js'];

        $this->menuList['contact']['active'] = true;
        $data['menu'] = $this->menuList;

        View::view('contact', $data);
    }

    public function  stock(Request $request){
        $data['title'] = 'Акции на межкомнатные и входные двери';
        $data['description'] = 'Акции на межкомнатные и входные двери в нашем магазине';
        $data['scripts'] = ['main.js'];

        $this->menuList['stock']['active'] = true;
        $data['menu'] = $this->menuList;

        $time = time();
        if(Config::$timer <= $time){
            $conf = new ConfigWrite();
            $conf->setTimer(5);
            $conf->write();
            $time = date($time + 5*24*60*60);
        }
        else{
            $time = Config::$timer;
        }

        $data['time'][] = date('c', $time);
        $data['time'][] = date('c', $time + 1*22*55*55);
        $data['time'][] = date('c', $time + 2*20*50*50);
        $data['time'][] = date('c', $time + 3*18*45*45);
        $data['time'][] = date('c', $time + 4*16*40*40);
        $data['time'][] = date('c', $time + 5*14*35*35);

        View::view('stock', $data);
    }

    public function guarantee(Request $request){
        $data['title'] = 'Гарантийный отдел';
        $data['description'] = 'Рассмотрение гарантийных случаев по межкомнаатным и входным дверям';
        $data['scripts'] = ['main.js', 'guarantee.js'];

        $data['menu'] = $this->menuList;

        View::view('guarantee', $data);
    }

    public function accessories(Request $request){
        $data['title'] = 'Аксессуары для дверей';
        $data['description'] = 'Подбирите подходящие аксессуары для межкомнатных и входных дверерй';
        $data['scripts'] = ['main.js'];

        $data['menu'] = $this->menuList;
        $data['handles'] = $this->colorWrite(Accessory::all());

        View::view('accessories', $data);
    }

    private function colorWrite($access){
        foreach ($access as $item){
            $colors = explode(',', $item->color);
            $colorsList = [];
            foreach ($colors as $color){
                switch ($color){
                    case 'mz':
                        $colorsList['Матовое золото'] = '#f5d78e';
                        break;
                    case 'pz':
                        $colorsList['Полированное золото'] = '#f7ca65';
                        break;
                    case 'mh':
                        $colorsList['Матовый хром'] = '#a4a4ac';
                        break;
                    case 'ph':
                        $colorsList['Полированный хром'] = '#e1e5e8';
                        break;
                    case 'mb':
                        $colorsList['Матовая бронза'] = '#a47a52';
                        break;
                    case 'be':
                        $colorsList['Белая эмаль'] = '#e2e2e2';
                        break;
                }
            }
            $item->colors = $colorsList;
        }
        return $access;
    }
}