<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Carbon\Carbon;

class UserController extends Controller
{
    public function getUser(){

        //example with model
        $student = Student::all();
        return $student;
    }

    public function setUser(Request $request){
        $student = Student::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
        ]);

        if( $student ){
            return response()->json(['message' => 'Student created successfully', 'user' => $student], 201);
        }else{
            return "error";
        }
    }



    public function authenticate(Request $request){
        $student = Student::where("email", $request->email)->first();
        if( $student ){
            return response()->json(["message"=> "you are authorized","user"=> $student], 200);
        }else{
            return response()->json(["message"=> "Not authorized","user"=> null],400);
        }
    }
}
