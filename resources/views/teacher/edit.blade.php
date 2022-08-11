

@section('title', 'Editar curso')
@extends('layouts.app')

<div class="col-lg">
    <div class="form bg-light text-dark rounded">
        <form action="/courses" method="POST" class="mx-3 px-3 my-5 pt-2 pb-5" enctype="multipart/form-data">
        @csrf
            <h2 class="text-center mt-5">Actualizar Teacher</h2>
            <br>
            <div class="form-group">
                <label for="name">Nuevo Nombre del Teacher</label>
                <input id="name" class="form-control" type="text" name="name">
            </div>
            <div class="form-group">
                <label for="description"> Last Name</label>
                <input id="lastname" class="form-control" type="text" name="lastname">
            </div>
            <div class="form-group">
                <label for="duration">collage degree</label>
                <input id="collage degree" class="form-control" type="text" name="collage degree">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input id="age" class="" type="file" name="imagen">
                <div class="form-group">
                    <label for="contract date">contract date</label>
                    <input id="contract date" class="form-control" type="date" name="contract date">
                </div>
                <div class="form-group">
                    <label for="image">image</label>
                    <input id="image" class="form-control" type="file" name="image">
                </div>
                <div class="form-group">
                    <label for="identity document">identity document</label>
                    <input id="identity document" class="form-control" type="file" name="identity document">
                </div>
            </div>
            <div class="button text-center">
                <button class="btn btn-primary" type="submit">Actualizar</button>
            </div>

        </form>
    </div>
</div>
