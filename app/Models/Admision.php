<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Admision extends Model
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
       
     

    
    ];
    protected $collection = 'Admision';

}