<?php

use \Core\Route;

Route::get('/admin', 'AdminController@login');
Route::get('/admin/index', 'AdminController@index');
Route::get('/admin/doors-list', 'AdminController@doorsList');
Route::get('/admin/setting', 'AdminController@setting');
Route::get('/admin/logout', 'AdminController@logout');

Route::get('', 'IndexController@index');
Route::get('/catalog', 'IndexController@catalog');
Route::get('/door', 'IndexController@door');
Route::get('/system-door', 'IndexController@doorSystem');
Route::get('/contact', 'IndexController@contact');
Route::get('/stock', 'IndexController@stock');
Route::get('/guarantee', 'IndexController@guarantee');
Route::get('/accessories', 'IndexController@accessories');

Route::get('/get-doors-site', 'AjaxController@getDoorsSite');
Route::get('/get-accessories', 'AjaxController@getAccessories');
Route::get('/send-mail', 'AjaxController@sendMail');
Route::get('/send-guarantee', 'AjaxController@sendGuarantee');

Route::get('/admin/add-accessories', 'AdminAjaxController@addAccessories');
Route::get('/admin/get-accessories', 'AdminAjaxController@getAccessories');
Route::get('/admin/remove-accessories', 'AdminAjaxController@removeAccessories');

Route::get('/admin/add-image', 'AdminAjaxController@addImage');
Route::get('/admin/remove-image', 'AdminAjaxController@removeImage');
Route::get('/admin/add-door', 'AdminAjaxController@addDoor');
Route::get('/admin/get-doors', 'AdminAjaxController@getDoors');
Route::get('/admin/remove-door', 'AdminAjaxController@removeDoor');


