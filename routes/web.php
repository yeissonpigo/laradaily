<?php

use App\Http\Controllers\AuthController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
    return view('index');
});

Route::get('/', function () { 
    return view('index');
})->name('welcome');

Route::post('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/logout', [AuthController::class, 'logout']);

Route::resource('/posts', 'App\Http\Controllers\PostController');
Route::resource('/users', 'App\Http\Controllers\UserController');
Route::resource('/auth', 'App\Http\Controllers\AuthController');
Route::get('/test', [App\Http\Controllers\PostController::class, 'create']);
Route::get('/collaborate', function () { 
    return view('collaborate');
})->name('collaborate');
Route::post('mail/send', [App\Http\Controllers\MailController::class, 'send']);