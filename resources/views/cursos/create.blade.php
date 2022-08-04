
@extends('layouts.app')

@section('titulo', 'crear curso')

@section('contenido')

<form method="POST" action="/cursos">
    @csrf
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<h2>Aqui puedes crear un nuevo curso</h2>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input id="nombre" class="form-control" type="text" name="nombre">
    </div>

    <div class="form-group">
        <label for="descripcion">descripcion</label>
        <input id="descripcion" class="form-control" type="text" name="descripcion">
    </div>

    <div class="form-group">
        <label for="duracion">duracion</label>
        <input id="duracion" class="form-control" type="text" name="duracion">
    </div>
        <button class="btn btn-dark" type="submit">Crear</button>
</form>

{{--

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crear curso</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<div class="container">


    <h2>Aqui puedes crear un nuevo curso</h2>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input id="nombre" class="form-control" type="text" name="">
    </div>

    <div class="form-group">
        <label for="descripcion">descripcion</label>
        <input id="descripcion" class="form-control" type="text" name="">
    </div>

    <div class="form-group">
        <label for="duracion">duracion</label>
        <input id="duracion" class="form-control" type="text" name="">
    </div>
        <button class="btn btn-dark" type="submit">Crear</button>
</div>

</body>
</html>

--}}
