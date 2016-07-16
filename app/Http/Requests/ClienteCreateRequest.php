<?php

namespace Coocaxcontucar\Http\Requests;

use Coocaxcontucar\Http\Requests\Request;

class ClienteCreateRequest extends Request
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
            'tipo_doc'      => 'required',
            'nombre'       => 'required',
            'direccion'     => 'required|max:200',
            'tipo_persona'  => 'required',
            'vehiculo_id'   => 'required',
        ];
    }
}
