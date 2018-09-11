@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Profesor
                   @can('profesors.index')
                   <a href="{{ route('profesors.index') }}" class="btn btn-sm btn-primary pull-right">Lista</a>
                   @endcan
                </div>

                <div class="panel-body">
                <p> <strong>Nombre</strong> {{ $profesor->nombre }}</p>
                <p> <strong>Apelllidos</strong> {{ $profesor->apellidos }}</p>
                <p> <strong>Tel</strong> {{ $profesor->tel }}</p>
              
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection 