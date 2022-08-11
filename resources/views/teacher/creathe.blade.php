@extends('layouts.app')

@section('title', 'Crear teacher')

@section('content')

    <div class="container2">
        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-lg">
                <div class="form bg-light text-dark rounded">
                    <form action="/teacher" method="POST" class="mx-3 px-3 my-5 pt-2 pb-5" enctype="multipart/form-data">
                    @csrf
                    @if($errors -> any))
                    @foreach($errors->all()as $alerta)
                        <p>{{$alerta}}</p>
                        @endforeach
                        @endif






                        <h2 class="text-center mt-5">Crear Nuevo Teacher</h2>
                        <br>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group">
                            <label for="LastName">LastName</label>
                            <input id="LastName" class="form-control" type="text" name="LastName">
                        </div>
                        <div class="form-group">
                            <label for="collagedegreee">college degree</label>
                            <input id="collegedegree" class="form-control" type="text" name="collegedegree">
                        </div>
                        <div class="form-group">
                            <label for="age">age</label>
                            <input id="imagen" class="" type="file" name="age">
                        </div>
                        <div class="form-group">
                            <label for="contract date">contract date</label>
                            <input id="contract date" class="form-control" type="date" name="contract date">
                        </div>
                        <div class="form-group">
                            <label for="imagen">imagen-</label>
                            <input id="imagen" class="form-control" type="file" name="imagen">
                        </div>
                        <div class="form-group">
                            <label for="identity document">identity document</label>
                            <input id="identity document" class="form-control" type="file" name="identity document">
                        </div>
                        <div class="button text-center">
                            <button class="btn btn-success" type="submit">Crear</button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>

++

@endsection

