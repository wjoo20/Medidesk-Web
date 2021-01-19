<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'nombre'=>['string','max:20'],
            'apellido'=>['string','max:20'],
            'edad'=>['string','max:2'],
            'dni'=>['string','max:8','unique:dni'],
            'fecha_nacimiento' => ['required','date'],
            'genero' => ['string', 'max:10']
        ];
    }


  
}
