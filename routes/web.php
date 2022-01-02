<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use \App\Http\Controllers\BookController;
use \App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/user')->group(function(Router $router) { //группируем по префиксу
    $router->get('/index', [UserController::class, 'index']); //такой вариант записи
    Route::post('/show', [UserController::class, 'show']); //и такой вариант записи

});

Route::prefix('/book')->group(function(Router $router) { //группируем по префиксу
    $router->get('/index', [BookController::class, 'index']);
    $router->get('/show', [BookController::class, 'show']);
    $router->get('/service', [BookController::class, 'service']);
});

