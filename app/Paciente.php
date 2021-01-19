<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model;

class Paciente extends Model
{
    

    protected $fillable = ['nombres', 'apellidos', 'edad', 'dni', 'fecha_nacimiento','genero'];

    protected $collection = 'Paciente';
}
