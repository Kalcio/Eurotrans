<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            //$table->increments('id');
            
            $table->integer('rut')->primary();
            $table->string('nombre');
            $table->integer('numero');
            $table->string('correo', 40);
            $table->string('direccion', 40);
            $table->timestamps();


            //$table->foreign('id_sucursal')->references('id')->on('sucursals');
            $table->foreignID('id_sucursal')
                  ->nullable()
                  ->constrained('sucursals')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
