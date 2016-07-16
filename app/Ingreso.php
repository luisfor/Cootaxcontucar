<?php

namespace Coocaxcontucar;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $table = "ingresos";
    protected $fillable = ['debito','credito','iva','cod_cliente','cod_iva','cod_ingreso','fecha','cliente_id'];


    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['fecha'] = date("Y-m-d", strtotime($value) );
    }



}