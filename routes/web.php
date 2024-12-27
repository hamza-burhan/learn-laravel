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



// Example of grouped routes
// Route::prefix('/api')->group(function () {
//     Route::get('/view', function () {
//         return view('welcome');
//     });
//     Route::get('/user', [User::class, 'getUser']);
// });


// Example of group route with controller
// Route::controller(User::class)->group(function (){
//     Route::get('/user', 'getUser');
//     Route::get('/setuser/{id}', 'setuser');
// });

