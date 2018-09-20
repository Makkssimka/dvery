<?php

use \Core\Route;

Route::get('/admin', 'AdminController@login');
Route::get('/admin/index', 'AdminController@index');

