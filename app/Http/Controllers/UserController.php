<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

use App\Models\User;


class UserController extends Controller
{
    public function getUser(){
        // example of httpClient get
        $response = Http::get('https://jsonplaceholder.typicode.com/users');
        $users = $response->json();
        return $users;
    }

    
}
