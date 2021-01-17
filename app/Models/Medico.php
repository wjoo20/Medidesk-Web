<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Medico extends Model
{
  
    protected $fillable = [
        'dni',
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'edad',  
        'genero',
        'telefono',
        'direccion',
        'especialidad',
        'cmp',
  
    
    ];
    protected $collection = 'Medico';


}