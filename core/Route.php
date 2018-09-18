<?php

namespace Core;

use App\Controllers\ErrorController;

class Route
{

    private static $getArray = [];

    public static function get($url, $method)
    {
        self::$getArray[$url] = $method;
    }

    public static function getRoute(Request $request){
        $url = $request->getUrl();

        $controller = '';
        $method = '';

        if(!$url) {
            $controller = 'App\Controllers\indexController';
            $method = 'index';
        }
        else{
            $rt = explode('@',self::$getArray[$url]);
            $controller = 'App\Controllers\\'.ucfirst($rt[0]);
            $method = $rt[1];
        }

        if(!class_exists($controller) || !method_exists($controller, $method)){
            $error = new ErrorController();
            $error->pageNoFound();
            exit();
        }

        $app = new $controller();
        $app->$method($request);
    }
}