<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getUser(){

        //example of Create record
        // $user = DB::table("students")->insert([
        //     "name"=> "Burhan",
        //     "dep" => "BD",
        // ]);


        //example of Read
        // $user = DB::table("students")->get();


        //exaple of Update
        // $user = DB::table('students')->where('dep', 'CS')
        // ->update(['name' => 'Update Hamza']);

        //example of Delete
        $user = DB::table('students')->where('name', 'Burhan')->delete();

        
        return $user;


        //example of get records
        // $users = DB::table("users")->get();
        // dd($users);
    }
}
