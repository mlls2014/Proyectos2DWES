<?php

use App\Http\Controllers\PruebaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PeliculaController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('users/{id?}', [UserController::class,'show']);

Route::get('prueba', PruebaController::class)->name('irfuera');

Route::resource('peliculas', PeliculaController::class)->names([
    'create' => 'creapeli'
    ]);
