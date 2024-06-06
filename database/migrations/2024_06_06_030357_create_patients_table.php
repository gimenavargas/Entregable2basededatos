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
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('apellidos');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('codigo_postal');
            $table->string('localidad');
            $table->string('provincia');
            $table->date('fecha_nacimiento');
            $table->string('sexo');
            $table->string('num_seguro_social');
            $table->string('telefono');
            $table->date('fecha_consulta');
            $table->date('fecha_alta');
            $table->string('diagnostico');
            $table->string('tratamiento');
            $table->text('notas_observaciones')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
