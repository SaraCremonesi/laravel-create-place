@extends('layouts.app')

@section('content')
  <div class="container">
    <main>
      <h1>Students List</h1>

      @foreach ($students as $student)
        <ul>
          <li>Nome: {{$student->nome}}</li>
          <li>Cognome: {{$student->cognome}}</li>
          <li>Media: {{$student->media}}</li>
        </ul>
      @endforeach
    </main>
  </div>
@endsection
