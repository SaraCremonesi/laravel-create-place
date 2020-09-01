<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;

class StudentsController extends Controller
{
    public function index() {
      
      $students = Students::all();
    //   $students = [
    //     [
    //       'nome'=>'Pinco',
    //       'cognome'=>'Pallino',
    //       'media'=>7.5
    //     ],
    //     [
    //       'nome'=>'Tiziano',
    //       'cognome'=>'Tizio',
    //       'media'=>6
    //     ],
    //     [
    //       'nome'=>'Caio',
    //       'cognome'=>'Sempronio',
    //       'media'=>9
    //     ],
    //   ];
    //
      return view('students', compact('students'));
      // [
    //     'students'=>$students,
    //     'teacher'=>'Alessandro Scolozzi',
    //     'teacher_age'=>37
    //   ]);
    }
}
