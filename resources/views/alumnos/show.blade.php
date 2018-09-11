@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Alumno
                   @can('alumnos.index')
                   <a href="{{ route('alumnos.index') }}" class="btn btn-sm btn-primary pull-right">Lista</a>
                   @endcan
                </div>

                <div class="panel-body">
                <p> <strong>Nombre</strong> {{ $alumno->nombre }}</p>
                <p> <strong>Apelllidos</strong> {{ $alumno->apellidos }}</p>
                             
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection 