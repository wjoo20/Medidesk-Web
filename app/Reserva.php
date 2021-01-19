<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Reserva extends Model
{

    // protected $primaryKey='id';

    protected $fillable=['
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

    protected $collection='Cita';

}