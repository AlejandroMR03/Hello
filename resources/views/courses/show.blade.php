@extends('layouts.app')

@section('title', 'Mostrar cursos')

@section ('content')

<div class="m-auto">
    <img src="{{ Storage::url($grade->imagen) }}" width="300" height="220" alt="">
    <p class="card-text"> <b>Contenido:</b> {{$grade->description}} </p>
    <p class="card-text"> <b>Duración:</b> {{$grade->duration}} Horas</p>
    <a href="/courses/{{$grade->id}}/edit" class="btn btn-succes">Editar</a>

    <form class="form-group" action="/courses/{{$grade->id}}" method="POST">
     @csrf
     @method('DELETE')
     <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
</div>

@endsection
