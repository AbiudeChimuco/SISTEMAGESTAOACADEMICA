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
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('idschool');
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('nif')->unique();
            $table->string('provincia')->nullable();
            $table->string('morada');
            $table->integer('telefone');
            $table->enum('status', ['activo', 'suspenso', 'inactivo'])->default('activo');
             $table->enum('nivel', ['superior', 'primario', 'medio'])->default('primario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
