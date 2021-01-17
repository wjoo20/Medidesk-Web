<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Enfermera extends Model
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
       
        'cep',
    

    
    ];
    protected $collection = 'Enfermera';


}