<?php

namespace App\Controllers;

use App\Helpers\ConfigWrite;
use Config;
use App\Models\Users;
use Core\Request;
use Core\View;

class AdminController
{
    private $menuList = [
        'accessories' => [
            'name'  => 'Аксессуары',
            'icon'  => 'tag',
            'url'  => '/admin/index',
            'active' => false
        ],
        'doors' => [
            'name' => 'Каталог',
            'icon' => 'image',
            'url'  => '/admin/doors-list',
            'active' => false
        ],
        'setting' => [
            'name' => 'Настройки',
            'icon' => 'cog',
            'url'  => '/admin/setting',
            'active' => false
        ],
    ];
    public function login(Request $request){

        $data['title'] =  "Авторизация в админ панели";
        $data['description'] = "Авторизация в админ панели";
        $data['scripts'] = ['login.js'];
        $data['error'] = false;

        if($request->isPost()){
            $user = Users::first();
            $login = $request->input('login');
            $password = $request->input('password');

            if($user->login == $login && $user->password == md5($password)){
                $request->setSession('isKey', true);
                $request->redirect('/admin/index');
            }
            else{
                $data['error'] = true;
            }
        }

        View::view('admin/login', $data);
    }

    public function index(Request $request){
        if(!$request->getSession('isKey')) $request->redirect('/admin');

        $data['title'] =  "Список аксессуаров";
        $data['description'] = "Список аксессуаров";
        $data['scripts'] = ['index.js'];

        $this->menuList['accessories']['active'] = true;
        $data['menu'] = $this->menuList;

        View::view('admin/index', $data);
    }

    public function doorsList(Request $request){
        if(!$request->getSession('isKey')) $request->redirect('/admin');

        $data['title'] =  "Список дверей";
        $data['description'] = "Список дверей";
        $data['scripts'] = ['doors.js'];

        $this->menuList['doors']['active'] = true;
        $data['menu'] = $this->menuList;

        View::view('admin/doors', $data);
    }

    public function setting(Request $request){
        if(!$request->getSession('isKey')) $request->redirect('/admin');

        $data['title'] = "Настройки сайта";
        $data['description'] = "Настройки сайта";
        $data['scripts'] = ["setting.js"];

        $this->menuList['setting']['active'] = true;
        $data['menu'] = $this->menuList;
        $data['settings'] = [];

        if($request->isPost()){
            $siteName = $request->input('siteName');
            $siteDesc = $request->input('siteDescription');

            $configWrite = new ConfigWrite();
            $configWrite->setSiteName($siteName);
            $configWrite->setSiteDesc($siteDesc);
            $configWrite->write();

            $data['settings'] = [
                'title' => $siteName,
                'desc' => $siteDesc
            ];
        }
        else{
            $data['settings'] = [
                'title' =>Config::$siteName,
                'desc' =>Config::$siteDescription
            ];
        }



        view::view('admin/setting', $data);
    }

    public function logout(Request $request){
        $request->clearSession();
        $request->redirect('/admin');
    }
}