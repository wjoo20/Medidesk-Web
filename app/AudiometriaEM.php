<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model;

class AudiometriaEM extends Model
{
    protected $primaryKey = '_id';

    protected $fillable = ['_id','fecha','cita.nombre','cita.apellido','cita.dni','estado','front'];

    protected $collection = 'Audiometria';
}
