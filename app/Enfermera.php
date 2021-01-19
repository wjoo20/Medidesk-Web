<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Enfermera extends Model
{
  
    protected $fillable = [
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'edad',  
        'genero',
        'telefono',
        'direccion',
        'dni',
        'cep',
        'email',
        'contraseña',  

    
    ];
    protected $collection = 'Enfermera';


}