<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController as User;
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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('api')->group(function () {
    Route::get('user', [User::class, 'getUser']);
    Route::post('user', [User::class, 'setUser']);
    Route::post('login', [User::class, 'authenticate']);
    Route::get('test', [User::class, 'test']);

});


