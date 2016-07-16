<?php

namespace Copserv\Config;

use Illuminate\Database\Eloquent\Model;

class Subcuenta extends Model
{
    protected $table = "cuentas";
    protected $fillable = ['cod_clase','nombre_clase'];
}
