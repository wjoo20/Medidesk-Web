<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveTriaje extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return $this->myRules();
    }

    public function myRules(){
        return [
            'dni_enfermera' => 'required|string|max:8',
            'id_cita' => 'string|max:30',
            'peso' => 'required|string|max:5',
            'talla' => 'required|string|max:4',
            'cintura' => 'required|string|max:4',
            'cadera' => 'required|string|max:4',
            'presion_arterial' => 'required|string|max:7',
            'frecuencia_cardiaca' => 'required|string|max:2',
            'frecuencia_respiratoria' => 'required|string|max:2',
            'saturacion_oxigeno' => 'required|string|max:2',
            'temperatura' => 'required|string|max:4'

        ];
    }
}
