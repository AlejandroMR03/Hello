

@section('title', 'Editar curso')
@extends('layouts.app')

<div class="col-lg">
    <div class="form bg-light text-dark rounded">
        <form action="/courses" method="POST" class="mx-3 px-3 my-5 pt-2 pb-5" enctype="multipart/form-data">
        @csrf
            <h2 class="text-center mt-5">Actualizar Curso</h2>
            <br>
            <div class="form-group">
                <label for="name">Nuevo Nombre del curso</label>
                <input id="name" class="form-control" type="text" name="name">
            </div>
            <div class="form-group">
                <label for="description"> Nueva Descripción</label>
                <input id="description" class="form-control" type="text" name="description">
            </div>
            <div class="form-group">
                <label for="duration">Duración (horas)</label>
                <input id="duration" class="form-control" type="text" name="duration">
            </div>
            <div class="form-group">
                <label for="imagen">Cargue la imagen del curso</label>
                <input id="imagen" class="" type="file" name="imagen">
            </div>
            <div class="button text-center">
                <button class="btn btn-primary" type="submit">Actualizar</button>
            </div>

        </form>
    </div>
</div>
