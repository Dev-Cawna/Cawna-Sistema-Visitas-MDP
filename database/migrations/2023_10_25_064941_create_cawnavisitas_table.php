<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cawnavisitas', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_documento');
            $table->string('documento');
            $table->string('visitante');
            $table->string('telefono', 9);
            $table->string('institucion_del_visitante');
            $table->string('area_destino');
            $table->string('persona_a_contactar');
            $table->string('razon_de_visita');
            $table->string('hora_de_ingreso', 20);
            $table->string('hora_de_salida', 20);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cawnavisitas');
    }
};
