<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Hello World";
}); 


Route::get('/about', function (){
    echo 'About us';
}); 