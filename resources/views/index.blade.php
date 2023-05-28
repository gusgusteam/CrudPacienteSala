@extends('layouts.header')

@section('contenido')

  <div class="d-flex justify-content-center align-items-center" style="height: 50vh;">
      <h1>CRUD DE PACIENTE Y SALA EN LARAVEL 9</h1>
  </div>
  <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">
    <h3>pagina web con relacion de 1 a 1*..</h3>
  </div>
  <div class="mb-2 text-center">
    <a href="{{route('sala.index',1)}}" class="btn btn-dark"> SALAS </a>
    <a href="{{route('paciente.index',1)}}" class="btn btn-dark"> PACIENTE</a>
  </div>

@endsection

