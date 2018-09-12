<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Profesor;
use App\Curso;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos=Alumno::paginate(5);
        
        
        //dd($alumnos);

        return view('alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesores=Profesor::orderBy('nombre','ASC')->pluck('nombre','id');//paso solo el nombre y el id
        $cursos=Curso::orderBy('nombre','ASC')->pluck('nombre','id');//paso solo el nombre y el id
        //dd($cursos);


        return view('alumnos.create',compact('profesores','cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno=Alumno::create($request->all());
      

        //relacion de muchos a muchos alumno->curso
        $alumno->cursos()->attach($request->get('cursos')); //la magia de muchos a muchos

        //$alumno->curso()->sync($request->curso);
        //super importante para que se inserte los valores en los dos registros
        
        return redirect()->route('alumnos.index')
        ->with('info','Alumno guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        return view('alumnos.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        return view('alumnos.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        $alumno->update($request->all());
        return redirect()->route('alumnos.index')
        ->with('info','Alumno actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return back()->with('info','Eliminado Correctamente');
    }
}
