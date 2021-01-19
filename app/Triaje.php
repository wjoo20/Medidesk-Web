<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;
//use Illuminate\Database\Eloquent\Model;

class Triaje extends Model
{
    protected $primary_key = '_id';

    protected $fillable = [
        '_id',
        'id_cita',
        'peso',
        'talla',
        'cintura',
        'cadera',
        'presion_arterial',
        'frecuencia_cardiaca',
        'frecuencia_respiratoria',
        'saturacion_oxigeno',
        'temperatura',
        'dni_enfermera'];

    protected $collection = 'Triaje';
}
