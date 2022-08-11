@extends('layouts.app')

@section('title', 'Mostrar teachers')

@section ('content')

<div class="m-auto">
    <img src="{{ Storage::url($grade->imagen) }}" width="300" height="220" alt="">
    <p class="card-text"> <b>Name Teacher</b> {{$grade->name}} Nombre del Teacher </p>
    <p class="card-text"> <b>collage degree:</b> {{$grade->collagedegree}} Titulo Universitario</p>
    <a href="/courses/{{$grade->id}}/edit" class="btn btn-succes">Editar</a>

    <form class="form-group" action="/teacher/{{$grade->id}}" method="POST">
     @csrf
     @method('DELETE')
     <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
</div>

@endsection
