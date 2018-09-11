@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Editar Profesor
                </div>

                <div class="panel-body">
                
                {!! Form::model($profesor, ['route'=> ['profesors.update', $profesor->id],
                 'method'=>'PUT']) !!}

                @include('profesors.partials.form')
                
                {!! Form::close() !!}
                
                
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection 