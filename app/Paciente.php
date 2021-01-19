<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Paciente extends Model
{
  
    protected $primary_key = '_id';

    protected $fillable = [
        "_id",
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'edad',  
        'genero',
        'telefono',
        'direccion',
        'dni',
        'id_empresa'];


    protected $collection = 'Paciente';


}