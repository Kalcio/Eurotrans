<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuedePoseersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puede__poseers', function (Blueprint $table) {
            $table->id();
            $table->string('estado');
            $table->timestamps();

            $table->foreignID('id_servicio')
            ->nullable()
            ->constrained('servicios')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignID('id_proveedor')
            ->nullable()
            ->constrained('proveedors')
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
        Schema::dropIfExists('puede__poseers');
    }
}
