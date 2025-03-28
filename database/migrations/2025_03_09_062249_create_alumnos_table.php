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
            $table->tinyInteger('estado_alumno');
            $table->string('matricula_alumno')->unique();
            $table->string('nombre_alumno');
            $table->string('direccion_alumno');
            $table->string('telefono1_alumno')->unique();
            $table->string('telefono2_alumno')->nullable();
            $table->string('correoE_alumno')->unique();
            $table->date('fNacimiento_alumno');
            $table->string('carrera_alumno');
            $table->string('periodo_alumno');
            $table->string('edificio_alumno');
            $table->string('grupo_alumno');
            
            $table->date('ultRevision_alumno');
            $table->string('antecedentes_alumno')->nullable();
            $table->string('enfermedades_alumno')->nullable();
            $table->string('intervencionesQ_alumno')->nullable();
            $table->string('medicamentos_alumno')->nullable();
            $table->string('alergias_alumno')->nullable();
            $table->string('tipoSangre_alumno');
            $table->string('antecedentesF_alumno')->nullable();
            $table->string('restricMed_alumno')->nullable();
            $table->string('contactoMed_alumno')->nullable();
            
            $table->string('observaciones_alumno')->nullable();
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
