<?php

namespace Copserv\Config;

use Illuminate\Database\Eloquent\Model;

class Arl extends Model
{
    protected $table = "arls";
    protected $fillable = ['nombre','nit','codigo'];
}
