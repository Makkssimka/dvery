<?php

namespace App\Controllers;

use App\Models\Users;
use Core\Request;
use Core\View;

class AdminController
{
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

        $data['title'] =  "Административная панель";
        $data['description'] = "Административная панель";
        $data['scripts'] = [];

        View::view('admin/index', $data);
    }
}