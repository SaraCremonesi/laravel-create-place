@extends('layouts.app')

@section('content')
  <div class="container">
    <main>
      <h1>Students list</h1>
      <div id="students-list">

      </div>
    </main>
  </div>


  <script src="{{asset('js/app.js')}}"></script>
  <script id="students-template" type="text/x-handlebars-template">
    <ul>
      <li>Nome: @{{ nome }}</li>
      <li>Cognome: @{{ cognome }}</li>
      <li>Media: @{{ media }}</li>
    </ul>
  </script>

@endsection
