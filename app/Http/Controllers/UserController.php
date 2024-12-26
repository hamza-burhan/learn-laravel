<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser($userId){
        return "Hamza Burhan with this $userId";
    }
}
