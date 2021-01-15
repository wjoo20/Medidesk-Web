<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Paciente extends Model
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
        'id_empresa'
        
    

    
    ];
    protected $collection = 'Paciente';


}