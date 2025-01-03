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


//Example of welcome page
Route::get('/', function () {
    return view('welcome');
});

Route::get('user', [User::class, 'getUser']);
