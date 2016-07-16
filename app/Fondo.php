<?php

namespace Copserv;

use Illuminate\Database\Eloquent\Model;

class Fondo extends Model
{
    protected $table = "fondos";
    protected $fillable = ['nombre','nit','codigo'];
}