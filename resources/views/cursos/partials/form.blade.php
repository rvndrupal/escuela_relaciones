<div class="from-group">    
    {!! Form::label('nombre','Nombre del Curso') !!}
    
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('descripcion','Descripción') !!}
    
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}   
    
</div>


<div class="from-group">    
        
    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}   
    
</div>

