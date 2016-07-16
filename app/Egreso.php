<?php

namespace Coocaxcontucar;

use Illuminate\Database\Eloquent\Model;

class Egreso extends Model
{
    protected $table = "egresos";
    protected $fillable = ['tipo_egreso','cod_cliente','cod_egreso','debito','credito','fecha','cliente_id'];


    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['fecha'] = date("Y-m-d", strtotime($value) );
    }
}