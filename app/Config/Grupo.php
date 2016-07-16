<?php

namespace Copserv\Config;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = "grupos";
    protected $fillable = ['cod_grupo','nombre_grupo','clase_id'];
    public $timestamps = false;
}
