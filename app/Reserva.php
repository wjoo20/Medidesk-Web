<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Reserva extends Model
{
    // protected $primaryKey='id';

    protected $fillable=['dni_paciente','fecha_reserva','estado'];

    protected $collection='Reserva';
}
