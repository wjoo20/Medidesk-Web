<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Empresa extends Model
{
  
  protected $fillable = [
        'ruc',
        'nombre',
        'direccion',
       
       
    ];
    protected $collection = 'Empresa';

  

}