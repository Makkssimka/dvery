<?php

namespace App\Controllers;

use Core\View;

class ErrorController
{
    public function pageNoFound(){

        View::view('404');
    }
}