<?php

namespace Core;


class View
{
    public static function view($name, $data = []){

        $loader = new \Twig_Loader_Filesystem('template');
        $twig = new \Twig_Environment($loader);

        echo $twig->render($name.'.twig.php', $data);

    }

}