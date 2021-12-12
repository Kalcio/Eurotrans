<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('carga',200);
            $table->string('seguro',200);
            $table->string('observaciones',500);
            $table->timestamps();

            $table->foreignID('id_tipo')
            ->nullable()
            ->constrained('tipos')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignID('id_ruta')
            ->nullable()
            ->constrained('rutas')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignID('id_agente')
            ->nullable()
            ->constrained('agentes')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignID('id_cliente')
            ->nullable()
            ->constrained('clientes')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignID('id_estado')
            ->nullable()
            ->constrained('estados')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignID('id_incoterm')
            ->nullable()
            ->constrained('incoterms')
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
        Schema::dropIfExists('servicios');
    }
}
