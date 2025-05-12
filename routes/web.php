<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'));

//Route::get('/hellow', function () { return view('hellow', ['name' => 'yuta',couse => 'laravel']);

//Route::get('/hellow-world', function () { return 'hellow-world'; });

//アロー関数
Route::get('/hellow-world', fn () => 'arrow hellow'); 
