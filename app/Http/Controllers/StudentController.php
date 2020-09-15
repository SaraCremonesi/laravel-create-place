<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index() {
      $students = [
        [
          'nome' => 'Giuseppe',
          'cognome' => 'Bianchi',
          'media' => 10
        ],
        [
          'nome' => 'Marco',
          'cognome' => 'Rossi',
          'media' => 8.5
        ],
        [
          'nome' => 'Giulia',
          'cognome' => 'Verdi',
          'media' => 7
        ],
        [
          'nome' => 'Marta',
          'cognome' => 'Neri',
          'media' => 4.5
        ],
      ];

      $studentsArray = Student::all();

      return view('students', compact('students', 'studentsArray' ));
      }
}
