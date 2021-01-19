<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model;

class Reserva extends Model
{
    protected $primarykey = 'id';

    protected $fillable = ['id', 'Nombre', 'Apellido', 'Edad', 'DNI', 'Fecha', 'Historia'];

    protected $collection = 'Reserva';
}
