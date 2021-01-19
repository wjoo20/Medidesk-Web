<?php

namespace App;


use Jenssegers\Mongodb\Eloquent\Model;
//use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $primary_key = '_id';

    protected $fillable = ['
        _id',
        'fecha_reserva',
        'estado',
        'dni_paciente',
        'especialidad',
        'fecha_cita',
        'dni_medico',
        'estado_triaje',
        'diagnostico._id',
        'diagnostico.descripcion'];

    protected $collection = 'Cita';

    

}
