<?php

use \Core\Route;

Route::get('/admin', 'AdminController@login');
Route::get('/admin/index', 'AdminController@index');
Route::get('/admin/setting', 'AdminController@setting');
Route::get('/admin/logout', 'AdminController@logout');

Route::get('/catalog', 'IndexController@catalog');
Route::get('/door', 'IndexController@door');
Route::get('/system-door', 'IndexController@doorSystem');
Route::get('/contact', 'IndexController@contact');
Route::get('/stock', 'IndexController@stock');
Route::get('/guarantee', 'IndexController@guarantee');

Route::get('/get-doors-site', 'AjaxController@getDoorsSite');
Route::get('/send-mail', 'AjaxController@sendMail');
Route::get('/send-guarantee', 'AjaxController@sendGuarantee');


