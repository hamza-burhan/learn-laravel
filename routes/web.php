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


//Examples of view
Route::get('home/{name}',function($name){
    return view('home', ['userName'=>$name]);
});


//example of redirection
route::redirect('/about', '/');



//example of another way of render view
Route::view('/customer', 'home');


//example of roting with controllers
Route::get('user/{id}', [User::class, 'getUser']);



//example of blade 
Route::get('user', function () {
    $users = ['Hamza', 'Jawad', 'burhan'];
    return view('user', ['users' => $users]);
});