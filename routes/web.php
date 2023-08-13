<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\EtudiantController@index')
    ->name('index');


Route::get('/contact/{nom?}-{id?}', [EtudiantController::class, 'contact'])
    ->whereNumber('id')
    ->where('nom', '[a-zA-Z\-]+');
