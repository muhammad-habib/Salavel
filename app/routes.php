<?php
$router->resource('users','UserController');
$router->resource('cats','CategoryController');
$router->get('admin','PagesController@admin');
$router->get('login','AuthController@showlogin');
$router->get('register','AuthController@showregister');

$router->post('salama',function (){
    upload_file('file');
    var_dump($_FILES);
});
//Editor Api
$router->get('image_load','AjaxController@image_load');
$router->post('delete_image','AjaxController@delete_image');
$router->post('file_upload','AjaxController@file_upload');
$router->post('delete_file','AjaxController@delete_file');
$router->post('image_upload','AjaxController@image_upload');