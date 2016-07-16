<?php

namespace Coocaxcontucar\Http\Requests;

use Coocaxcontucar\Http\Requests\Request;

class VehiculoCreateRequest extends Request
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
            'placa'         => 'required|max:6|min:6',
            'num_chasis'    => 'required',
            'marca'         => 'required',
            'cilindraje'    => 'required',
            'tipo_vehiculo' => 'required',
        ];
    }
}
