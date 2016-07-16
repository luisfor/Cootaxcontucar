<?php

namespace Coocaxcontucar;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = "providers";
    protected $fillable = ['tipo_doc','documento','nombre','apellidos', 'telefonos', 'direccion','tipo_persona','tipo_tercero'];
}
