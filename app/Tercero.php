<?php

namespace Coocaxcontucar;

use Illuminate\Database\Eloquent\Model;

class Tercero extends Model
{
    protected $table = "terceros";
    protected $fillable = ['tipo_doc','nombre','direccion','tipo_persona','tipo_tercero'];
}
