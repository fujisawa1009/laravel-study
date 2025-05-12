<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/hellow-world', function () { return 'hellow-world'; });

//アロー関数
Route::get('/hellow-world', fn () => 'arrow hellow'); 
