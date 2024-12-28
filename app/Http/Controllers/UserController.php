<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class UserController extends Controller
{
    public function getUser(){

        //example with model
        $student = Student::all();
        return $student;
    }
}
