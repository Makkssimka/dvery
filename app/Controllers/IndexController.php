<?php

namespace App\Controllers;

use App\Helpers\ConfigWrite;
use Config;
use Core\Request;
use Core\View;
use DateTime;
use DateInterval;

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

        $data['title'] = 'Каталог межкомнатных дверей и входных дверей';
        $data['description'] = 'Подбирите межкомнатную или входную дверь используя удобные фильтры';
        $data['scripts'] = ['main.js','catalog.js'];

        $this->menuList['catalog']['active'] = true;
        $data['menu'] = $this->menuList;

        View::view('catalog', $data);

    }

    public function door(Request $request){

        $data['door'] = [
            'id' => 1,
            'colorType'=>'black',
            'doorType'=> 'interior',
            'name' => 'Вираж',
            'vendor' => 'петрушкин завод',
            'price' => '57 000',
            'oldPrice' => '62 000',
            'example' => [
                [
                    'name' => 'Венге полосатый',
                    'img' => 'viras-venge-2014.jpg'
                ],
                [
                    'name' => 'Дуб белый',
                    'img' => 'viras-dub-2014.jpg'
                ],
                [
                    'name' => 'Полисанд Рио',
                    'img' => 'viras-polisand-2014.jpg'
                ],
                [
                    'name' => 'Венге полосатый 2 вариант',
                    'img' => 'viras-venge-2-2014.jpg'
                ],
                [
                    'name' => 'Венге полосатый 3 вариант',
                    'img' => 'viras-venge-3-2014.jpg'
                ]
            ],
            'alias' => 'petrushkin',
            'image' => 'viras-venge-2014.jpg',
            'description' => [
                'Размер' => '600, 700, 800, 900 x 2000 мм',
                'Покрытие' => 'ЭКОшпон',
                'Материал' => 'Сосновый брус',
                'Остекление' => 'Матовое стекло',
                'Наличник' => 'Телескопический',
                'Открывание' => 'Универсальное'
            ]
        ];

        $doorType = ($data['door']['doorType'] == 'interior')?'межкомнатная ':'входная ';
        $data['title'] = 'Дверь '.$doorType.$data['door']['name'];
        $data['description'] = 'Дверь '.$doorType.$data['door']['name'];
        $data['scripts'] = ['main.js','door.js'];


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
}