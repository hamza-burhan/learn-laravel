<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(){
        return "Hamza Burhan with this";
    }
    public function setuser($id){
        return "Setting user with id: $id";
    }
}
