<?php

namespace Copserv;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = "empresas";
    protected $fillable = ['id','nombre','nit','num_cuenta','razon_social'];
}
