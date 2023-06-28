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
        Schema::create('citas', function (Blueprint $table) {
            $table->bigIncrements('idCita');
            $table->decimal('montototal',9,2);
            $table->unsignedBigInteger('idHorarioAtencion');
            $table->unsignedBigInteger('idPaciente');
            $table->foreign('idHorarioAtencion')->references('idHorarioAtencion')->on('horarioatencions');
            $table->foreign('idPaciente')->references('idPaciente')->on('pacientes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
