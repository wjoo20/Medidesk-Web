<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Especialidad extends Model
{
  
    protected $fillable = [
        '_id',
        'nombre'    

    
    ];
    protected $collection = 'Especialidad';


}