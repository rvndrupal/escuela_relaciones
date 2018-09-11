@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Profesores
                    @can('profesors.create')
                    <a href="{{ route('profesors.create') }}" class="btn btn-sm btn-primary pull-right">Nuevo</a>
                    @endcan
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Telefono</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($profesors as $profesor )
                            <tr>
                                <td>{{ $profesor->id }}</td>
                                <td>{{ $profesor->nombre }}</td>
                                <td>{{ $profesor->apellidos }}</td>
                                <td>{{ $profesor->tel }}</td>
                                <td width="10px">
                                @can('profesors.show')
                                    <a href="{{ route('profesors.show', $profesor->id) }}" class="btn btn-sm btn-default">Ver</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('profesors.edit')
                                    <a href="{{ route('profesors.edit', $profesor->id) }}" class="btn btn-sm btn-default">Editar</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('profesors.destroy')
                                    
                                {!! Form::open(['route'=>['profesors.destroy', $profesor->id],
                                'method'=>'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">Eliminar</button>
                                
                                {!! Form::close() !!}                               
                                    
                                @endcan
                                </td>

                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>

                    {{ $profesors->render() }}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection