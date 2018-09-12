<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = [
        'nombre', 'apellidos','profesor_id','curso_id'
    ];


    public function profesor()
    {
        return $this->belongsTo(Profesor::class);
    }

    public function cursos(){
        return $this->belongsToMany(Curso::class);
    }
    
    
}
