<?php

namespace Coocaxcontucar\Http\Requests;

use Coocaxcontucar\Http\Requests\Request;

class TercerosCreateRequest extends Request
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
            'direccion'     => 'required|max:254',
            'tipo_persona'  => 'required',
        ];
    }
}
