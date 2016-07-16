<?php

namespace Copserv\Config;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    protected $table = "clases";
    protected $fillable = ['id','cod_clase','nombre_clase'];
    public $timestamps = false;
}
