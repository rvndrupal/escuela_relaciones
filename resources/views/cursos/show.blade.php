@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Curso
                   @can('cursos.index')
                   <a href="{{ route('cursos.index') }}" class="btn btn-sm btn-primary pull-right">Lista</a>
                   @endcan
                </div>

                <div class="panel-body">
                <p> <strong>Nombre</strong> {{ $curso->nombre }}</p>
                <p> <strong>descripción</strong> {{ $curso->descripcion }}</p>
               
              
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection 