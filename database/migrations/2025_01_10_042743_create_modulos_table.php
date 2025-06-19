<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('modulos', function (Blueprint $table) {
            $table->id('id_modulo');
            $table->string('name');  // Nombre del módulo o submódulo
            $table->string('to')->nullable(); // Ruta del módulo
            $table->string('icon')->nullable(); // Ícono del módulo
            $table->boolean('heading')->default(false); // Si es solo un encabezado sin enlace
            $table->integer('orden')->default(0); // Orden de visualización
            $table->foreignId('parent_id')->nullable()->constrained('modulos', 'id_modulo')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('modulos');
    }
};
