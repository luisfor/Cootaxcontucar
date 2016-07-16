<?php

namespace Coocaxcontucar\Http\Requests;

use Coocaxcontucar\Http\Requests\Request;

class CreateIngresoRequest extends Request
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
            'debito'      => 'required|numeric',
            'iva'    => 'required|numeric',
        ];
    }
}
