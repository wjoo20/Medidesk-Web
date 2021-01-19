<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{

    protected $fillable = ['Nombre', 'Apellido', 'Edad', 'DNI', 'F_nacimiento', 'Direccion'];

    protected $collection = 'Cita';
}
