<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEgresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresos', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipo_egreso', ['EFECTIVO', 'BANCO']);
            $table->integer('cod_cliente');
            $table->integer('cod_egreso');
            $table->decimal('debito',10,2);
            $table->decimal('credito',10,2);
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
        Schema::drop('egresos');
    }
}
