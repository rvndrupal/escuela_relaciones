<div class="from-group">    
    {!! Form::label('nombre','Nombre') !!}
    
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('apellidos','Apellidos') !!}
    
    {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}   
    
</div>


 



<div class="from-group">    
        
    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}   
    
</div>