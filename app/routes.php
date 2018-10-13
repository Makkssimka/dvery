<?php

use \Core\Route;

Route::get('/admin', 'AdminController@login');
Route::get('/admin/index', 'AdminController@index');
Route::get('/admin/setting', 'AdminController@setting');
Route::get('/admin/logout', 'AdminController@logout');

Route::get('/catalog', 'IndexController@catalog');
Route::get('/door', 'IndexController@door');

Route::get('/get-doors-site', 'AjaxController@getDoorsSite');


