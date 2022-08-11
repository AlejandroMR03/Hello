<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teachercontroller extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grade = teacher::all();//Traemos toda la info de la tabla courses a trabes del modelo y el método all()
        return view('teacher.create', compact('grade'));//Se adjunta grade a la vista para poderlo usar, usando compact
        // return $grade;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function creathe()
    {
        return view('teacher.creathse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //implementamos validaciones
        $validacionDatos = $request -> validate(['name' => 'requerid | max:10', 'avatar' => 'requerid | image']);
z

        //Se devuelve la petición hecha al servidor
         return $request->all();
        $grade = new teacher();//Crear una instancia de teacher
        $grade->name = $request->input('name');
        $grade->lastname = $request->input('LastName');
        $grade->collagedegree = $request->input('collagedegree');
        if($request->hasFile('imagen')){
            $grade->imagen = $request->file('imagen')->store('public/teacher');
        }
        $grade->save();//Comando para registrar la info en la bd
        return 'El teacher se ha guardado exitosamente';
         return $grade->name;
         return $grade;
         return $request->input('name');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grade= teacher::find($id);
        return view('teacher.show', compact('grade'));
    }

    public function showAbout($id)
    {
        // return view('courses.about_us');
        return view('about_us');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        // return 'el id del curso que desea actualizar es ...';
        // return 'la informacion que usted quiere actualizar, se veri asi en formato array';
        return view('teacher.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       // public function destroy($id)
       // {
       // $grade = teacher::find($id);
//
       // $urlImagenBD = $grade -> imagen;
       // //return $urlImagenBD;
       // $nameImagen = str_replace('public/','\storage\\',$urlImagenBD);
       // //return $nameImagen;
       // $rutacompleta = public_path().$nameImagen;
       // //return $rutacompleta;
       // unlink($rutacompleta);
       // $grade -> delete();
       // return 'eliminado';

   }

