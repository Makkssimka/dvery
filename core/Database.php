<?php
/**
 * Created by PhpStorm.
 * User: Makkssimka
 * Date: 10.06.2018
 * Time: 9:57
 */

namespace Core;
use Illuminate\Database\Capsule\Manager as Capsule;
use Config;


class Database
{
    function __construct()
    {
        $capsule = new Capsule();
        $capsule->addConnection([
            'driver'    => Config::$dbdriver,
            'host'      => Config::$dbhost,
            'database'  => Config::$dbname,
            'username'  => Config::$dbuser,
            'password'  => Config::$dbpassword,
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => ''
        ]);
        $capsule->bootEloquent();
    }
}