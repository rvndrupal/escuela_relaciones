<div class="from-group">    
    {!! Form::label('nombre','Nombre del Profesor') !!}
    
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('apellidos','Apellidos') !!}
    
    {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('tel','Telefono') !!}
    
    {!! Form::text('tel', null, ['class' => 'form-control']) !!}   
    
</div>


<div class="from-group">    
        {!! Form::label('alumno_id','Alumno') !!}
        
        {!! Form::select('alumno_id', $alumnos ,null, ['class' => 'form-control select-alumno','placeholder'=>'Selecciona un Alumno']) !!}   
        
</div>

<div class="from-group">    
        
    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}   
    
</div>

@section('js') {{-- Se agrega esta sección en el layout principal abajo de los plugins para que funcione--}}

<script>

        $('.select-tag').chosen({
            placeholder_text_multiple:'Seleccione un máximo de 3',
            max_selected_options:3,
            no_results_text:'No hay Resultados',
            search_contains:true
        });
    
        $('.select-alumno').chosen({
            placeholder_text_single:'Seleccione un Alumno',
            no_results_text:'No hay Resultados',
            search_contains:true
        });
    
        $('.textarea-content').trumbowyg();
    
    </script>