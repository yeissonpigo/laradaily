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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::post('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/logout', [AuthController::class, 'logout']);

Route::resource('/posts', 'App\Http\Controllers\PostController');
Route::resource('/users', 'App\Http\Controllers\UserController');
Route::resource('/auth', 'App\Http\Controllers\AuthController');
 
Route::get('/test2', function () {
    $files  = Storage::disk('google')->files();
    dd($files);
});

Route::get('/test1', function() {
    Storage::disk('google')->put('test.txt', 'Hello World');
});
Route::get('/test', [App\Http\Controllers\PostController::class, 'create']);
