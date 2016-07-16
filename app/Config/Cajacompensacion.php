<?php

namespace Copserv\Config;

use Illuminate\Database\Eloquent\Model;

class Cajacompensacion extends Model
{
    protected $table = "cajacompensacion";
    protected $fillable = ['nombre','nit','codigo'];
}
