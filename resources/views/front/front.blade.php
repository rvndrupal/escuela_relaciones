@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Alumnos
                   
                </div>

                <div class="panel-body">
                   
                  
                    <table class="table table-striped table-hover"> 
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Profesor</th>
                                <th>Curso</th>
                                
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($alumnos as $alumno )
                            <tr>
                                <td>{{ $alumno->id }}</td>
                                <td>{{ $alumno->nombre }}</td>
                                <td>{{ $alumno->apellidos }}</td>
                                <td>{{ $alumno->profesor->nombre }}</td>
                                <td>{{ $alumno->curso->nombre }}</td>
                            
                                
                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>


               
                   
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection