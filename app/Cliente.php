<?php

namespace Coocaxcontucar;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";
    protected $fillable = ['tipo_doc','documento','nombre','apellidos', 'telefonos', 'direccion','tipo_persona','tipo_tercero','vehiculo_id'];
}
