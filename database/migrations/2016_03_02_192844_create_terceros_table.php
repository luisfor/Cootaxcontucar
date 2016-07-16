<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTercerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terceros', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipo_doc', ['CC', 'NIT', 'PT', 'CE', 'TE', 'RC', 'TI']);
            $table->string('documento',20);
            $table->string('nombre',100);
            $table->string('apellidos',100)->nullable();
            $table->string('telefonos',100)->nullable();
            $table->string('direccion',200);
            $table->enum('tipo_persona', ['NATURAL', 'JURIDICA']);
            $table->enum('tipo_tercero', ['empleado', 'socio', 'proveedor', 'cliente']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('terceros');
    }
}
