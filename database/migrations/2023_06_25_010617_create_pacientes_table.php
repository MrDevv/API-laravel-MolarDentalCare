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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigIncrements('idPaciente');
            $table->string('Apellidos',100);
            $table->string('Nombres',100);
            $table->date('FechaNacimiento');
            $table->string('Dni',8);
            $table->string('Telefono',9);
            $table->string('Direccion',100);
            $table->string('Correo',100);
            $table->unsignedBigInteger('idUsuario');

            $table->foreign('idUsuario')->references('idUsuario')->on('usuarios');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
