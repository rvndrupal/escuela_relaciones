<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $fillable = [
        'nombre', 'apellidos','tel',
    ];

    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }
}
