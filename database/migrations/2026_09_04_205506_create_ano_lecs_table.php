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
        Schema::create('ano_lecs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('idschool');

            $table->string('nome');
            $table->date('data_inicio')->nullable();
            $table->date('data_fim')->nullable();
            $table->enum('estado', ['ativo', 'inativo','finalizado'])->default('ativo');
            $table->boolean('descricao')->nullable();

            $table->foreign('idschool')
                ->references('idschool')
                ->on('schools')
                ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ano_lecs');
    }
};
