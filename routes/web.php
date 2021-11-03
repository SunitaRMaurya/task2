<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Google_Login_Controller;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', [App\Http\Controllers\Task_Controller::class, 'index']);
Route::get('/reg_create', [App\Http\Controllers\Task_Controller::class, 'create'])->name('reg_create');
Route::post('/reg_store', [App\Http\Controllers\Task_Controller::class, 'store'])->name('reg_store');




Route::get('/google', [App\Http\Controllers\Google_Login_Controller::class,'redirectToProvider']);
Route::get('/google/callback',[App\Http\Controllers\Google_Login_Controller::class, 'handleProviderCallback']);


