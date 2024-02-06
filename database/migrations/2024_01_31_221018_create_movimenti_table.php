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
        Schema::create('movimenti', function (Blueprint $table) {
            $table->id();
            $table->string('codice', 13);
            $table->foreign('codice')->references('codice')->on('articoli')->constrained()->onDelete('cascade');
            $table->integer('qtamovimentata');
            $table->string('causale', 20);
            $table->date('datadocumento');
            $table->integer('numdocumento');
            $table->double('valunitario', 7, 2);
            $table->double('sconto', 4, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimenti');
    }
};
