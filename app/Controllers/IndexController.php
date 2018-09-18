<?php

namespace App\Controllers;

use Config;
use Core\Request;
use Core\View;

class IndexController
{
    public function index(Request $request){

        $data['title'] = Config::$siteName;
        $data['description'] = Config::$siteDescription;

        View::view('index', $data);
    }

    public function about(){
        print_r('About Page');
    }
}