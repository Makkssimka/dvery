<?php

namespace App\Controllers;

use Core\Request;
use Core\View;

class AdminController
{
    public function login(Request $request){

        $data['title'] =  "Авторизация в админ панели";
        $data['description'] = "Авторизация в админ панели";
        $data['scripts'] = ['login.js'];

        View::view('admin/login', $data);
    }
}