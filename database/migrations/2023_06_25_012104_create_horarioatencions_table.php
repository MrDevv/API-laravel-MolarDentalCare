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
        Schema::create('horarioatencions', function (Blueprint $table) {
            $table->bigIncrements('idHorarioAtencion');
            $table->string('estado',100);
            $table->date('fecharegistro');
            $table->string('horainicio');
            $table->string('horafin');
            $table->unsignedBigInteger('idOdontologo');
            $table->foreign('idOdontologo')->references('idOdontologo')->on('odontologos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarioatencions');
    }
};
