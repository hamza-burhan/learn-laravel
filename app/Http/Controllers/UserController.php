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

    public function test(Request $request){
        //example of file upload
        $request->validate([
            "file" => "required|file|mimes:jpg,jpeg,png|max: 2048"
        ]);

        if($request->hasFile("file") && $request->file("file")->isValid()){
            $file = $request->file('file');
            $path = $file->store('upload','public');
            return response()->json([
                'message' => 'File uploaded successfully',
                'file_url' => asset('storage/' . $path),  
            ], 200);
        }
        return response()->json(["message"=> "not file","file"=> null],400);
    }
}
