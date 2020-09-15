@extends('layouts.app')

@section('content')
  <div class="container">
    <main>
      <h1>Students List</h1>

      @foreach ($array_students as $student)
        <ul>
          <li>Nome: {{$student->nome}}</li>
          <li>Cognome: {{$student->cognome}}</li>
          <li>Voto: {{$student->media}}</li>
        </ul>
      @endforeach

      <h3>dall'array:</h3>
      @foreach ($students as $oneStudent)
        <ul>
          <li>Nome: {{$oneStudent['nome']}}</li>
          <li>Cognome: {{$oneStudent['cognome']}}</li>
          <li>Voto: {{$oneStudent['media']}}</li>
        </ul>
      @endforeach
    </main>
  </div>
@endsection
