<?php
include 'route.php';

use Routes\Route;


Route::get('/home', 'HomeController@index');

Route::get('/admin/add', function() {
    echo "admin/add";
});

Route::get('/admin/list', function() {
    echo "admin/list";
});

Route::dispatcher();
