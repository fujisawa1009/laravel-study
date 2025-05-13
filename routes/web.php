<?php
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'));

//Route::get('/hellow', function () { return view('hellow', ['name' => 'yuta',couse => 'laravel']);

//Route::get('/hellow-world', function () { return 'hellow-world'; });

//アロー関数
Route::get('/hellow-world', fn () => 'arrow hellow'); 


// 世界の時間
//Route::get('/world-time', [App\Http\Controllers\UtilityController::class, 'worldTime']);
Route::get('/world-time', [UtilityController::class, 'worldTime']);

// おみくじ
Route::get('/omikuji', [GameController::class, 'omikuji']);

// モンティ・ホール問題
Route::get('/monty-hall', [GameController::class, 'montyHall']);