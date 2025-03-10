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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('matricula_alumno')->unique();
            $table->string('nombre_alumno');
            $table->string('direccion_alumno');
            $table->string('telefono1_alumno')->unique();
            $table->string('telefono2_alumno')->nullable();
            $table->string('correoE_alumno')->nullable()->unique();
            $table->date('fNacimiento_alumno');
            $table->string('carrera_alumno');
            $table->tinyInteger('semestre_alumno');
            $table->string('enfermedades_alumno')->nullable();
            $table->string('medicamentos_alumno')->nullable();
            $table->string('alergias_alumno')->nullable();
            $table->string('tipoSangre_alumno');
            $table->string('restricMed_alumno')->nullable();
            $table->string('contactoMed_alumno');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
