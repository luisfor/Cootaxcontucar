<?php

namespace Coocaxcontucar;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = "vehiculos";
    protected $fillable = ['placa','num_chasis','marca','cilindraje','tipo_vehiculo','modelo'];

}
