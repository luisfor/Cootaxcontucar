<?php

namespace Coocaxcontucar;

use Illuminate\Database\Eloquent\Model;
use DB;

class Socio extends Model
{
    protected $table = "socios";
    protected $fillable = ['tipo_doc','documento','nombre','apellidos', 'telefonos', 'direccion','tipo_persona','tipo_tercero'];

    /*public static function Socios(){
        return DB::table('socios')
            ->join('terceros', 'terceros.id','=','socios.tercero_id')
            ->select('socios.*','terceros.tipo_doc','terceros.nombre','terceros.direccion','terceros.tipo_persona','terceros.tipo_tercero')
            ->get();
    }*/

}
