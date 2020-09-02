<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Students;


class StudentsController extends Controller
{
    public function index() {

      $students = Students::all();

      return view('students', compact('students'));
    // Alternativa
    // [
    //     'students'=>$students,
    //     'teacher'=>'Alessandro Scolozzi',
    //     'teacher_age'=>37
    //   ]);
    }

    public function handlebars() {
      return view('students-handlebars', []);
    }
}
