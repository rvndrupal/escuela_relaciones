@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Alumnos
                    @can('alumnos.create')
                    <a href="{{ route('alumnos.create') }}" class="btn btn-sm btn-primary pull-right">Nuevo</a>
                    @endcan
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($alumnos as $alumno )
                            <tr>
                                <td>{{ $alumno->id }}</td>
                                <td>{{ $alumno->nombre }}</td>
                                <td>{{ $alumno->apellidos }}</td>
                               
                                <td width="10px">
                                @can('alumnos.show')
                                    <a href="{{ route('alumnos.show', $alumno->id) }}" class="btn btn-sm btn-default">Ver</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('alumnos.edit')
                                    <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn btn-sm btn-default">Editar</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('alumnos.destroy')
                                    
                                {!! Form::open(['route'=>['alumnos.destroy', $alumno->id],
                                'method'=>'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">Eliminar</button>
                                
                                {!! Form::close() !!}                               
                                    
                                @endcan
                                </td>

                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>

                    {{ $alumnos->render() }}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection