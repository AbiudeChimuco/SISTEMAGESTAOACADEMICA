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
        Schema::create('turmas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('idschool');

            $table->string('nome');
            $table->string('classe')->nullable();
            $table->string('periodo')->nullable();
            $table->string('ano_letivo')->nullable();

            $table->foreign('idschool')
                ->references('idschool')
                ->on('schools')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turmas');
    }
};