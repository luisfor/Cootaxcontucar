<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ingresos', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('+',10,2);
            $table->decimal('-',10,2);
            $table->integer('iva')->default(16);
            $table->integer('cod_cliente')->default(1305);
            $table->integer('cod_iva')->default(2408);
            $table->integer('cod_ingreso')->default(4105);
            $table->date('fecha')->nullable();
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes');
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
        Schema::drop('Ingresos');
    }
}

