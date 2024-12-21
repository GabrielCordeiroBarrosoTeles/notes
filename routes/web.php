<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Hello World";
}); 


Route::get('/about', function (){
    echo 'About us';
}); 

Route::get('/main/{value}', [MainController::class, 'index']);

Route::get('/page2/{value}', [MainController::class, 'page2']);

Route::get('/page3/{value}', [MainController::class, 'page3']);

