<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Mycontroller;

Route::get('/mycontroller/{id?}', [Mycontroller::class, 'myfunction']);

Route::post('/mycontroller/{id?}', [Mycontroller::class, 'myfunction']);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return "<h1>Hello World!</h1>";
// });

// Route::get('/hello{id?}',function ($val=""){
//     return "<h1>Hello World $val</h1>";
// });
