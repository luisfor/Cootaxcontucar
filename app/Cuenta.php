<?php

namespace Coocaxcontucar;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $table = "cuentas";
    protected $fillable = ['nombre','codigo'];
}
