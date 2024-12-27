<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class UserController extends Controller
{
    public function getUser(){
        //Example of db
        $users = User::all();
        return $users;
    }
    public function setuser($id){
        return "Setting user with id: $id";
    }
}
