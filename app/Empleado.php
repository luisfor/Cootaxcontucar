<?php

namespace Coocaxcontucar;

use Illuminate\Database\Eloquent\Model;
use DB;
class Empleado extends Model
{
    protected $table = "empleados";
    protected $fillable = ['tipo_doc','documento','nombre','apellidos', 'telefonos', 'direccion','tipo_persona','tipo_tercero','cargo','sueldo','eps','fondo','arp','cc','tipo_contrato'];

    /*public static function Empleados(){
        return DB::table('empleados')
            ->join('terceros','terceros.id','=','empleados.tercero_id')
            ->where('terceros.tipo_tercero','=','empleado')
            ->select('empleados.*','terceros.*')
            ->paginate(14)
            ->get();
    }*/
}