<?php

namespace Copserv\Config;

use Illuminate\Database\Eloquent\Model;

class Eps extends Model
{
    protected $table = "eps";
    protected $fillable = ['nombre','nit','codigo'];
}
