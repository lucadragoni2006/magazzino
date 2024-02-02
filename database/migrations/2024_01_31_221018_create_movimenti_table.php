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
            $table->string('codice', 13)->unique();
            $table->tinyInteger('causale');
            $table->integer('numdocumento');
            $table->date('datadocumento');
            $table->integer('qtamovimentata');
            $table->double('valunitario', 7, 2);
            $table->double('sconto', 4, 2);
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