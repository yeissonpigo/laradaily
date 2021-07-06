<?php

use App\Http\Controllers\AuthController;
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
    return view('welcome');
});

Route::post('/auth/login', [AuthController::class, 'login']);

Route::resource('/users', 'App\Http\Controllers\UserController');
Route::resource('/auth', 'App\Http\Controllers\AuthController');

Route::get('/test', function () {
    return view('main');
}
);