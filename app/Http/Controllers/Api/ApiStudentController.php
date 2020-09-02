<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Students;

class ApiStudentController extends Controller
{
    public function index() {

      $students = Student::all();

      return response()->json(compact('students'));
      // Alternativa
      // return response()->json([
      //   'students'=> $students
      // ]);
    }
}
