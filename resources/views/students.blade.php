@extends('layouts.app')

@section('main')
  <h1>Students Page</h1>
  <h2>Teacher: {{ $teacher }} - Age: {{ $teacher_age }}</h2>
  <h2>Students:</h2>
    @foreach ($students as $student)
      <ul>
        <li>Name: {{ $student['nome'] }}</li>
        <li>Surname: {{ $student['cognome'] }}</li>
        <li>Average grade: {{ $student['media'] }}</li>
      </ul>
    @endforeach
@endsection
