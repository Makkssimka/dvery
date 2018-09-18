<?php
require_once 'vendor/autoload.php';

use \Core\Route;
use \Core\Request;
use \Core\Database;

require_once 'app/routes.php';

new Database();

$request = new Request($_SERVER);
Route::getRoute($request);
