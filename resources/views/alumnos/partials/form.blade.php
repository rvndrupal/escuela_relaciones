
<div class="from-group">    
    {!! Form::label('nombre','Nombre') !!}
    
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('apellidos','Apellidos') !!}
    
    {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('profesor_id','Profesor') !!}
    
    {!! Form::select('profesor_id', $profesores ,null, ['class' => 'form-control select-profesor','placeholder'=>'Selecciona un Profesor']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('curso_id','Alumno') !!}
    
    {!! Form::select('curso_id', $cursos ,null, ['class' => 'form-control select-curso','placeholder'=>'Selecciona un Curso']) !!}   
    
</div>
 



<div class="from-group">    
        
    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}   
    
</div>



@section('js') {{-- Se agrega esta sección en el layout principal abajo de los plugins para que funcione--}}

<script>

    
        $('.select-profesor').chosen({
            placeholder_text_single:'Seleccione un Alumno',
            no_results_text:'No hay Resultados',
            search_contains:true
        });

        $('.select-curso').chosen({
            placeholder_text_single:'Seleccione un Alumno',
            no_results_text:'No hay Resultados',
            search_contains:true
        });
    
       
    
    </script>
@endsection
