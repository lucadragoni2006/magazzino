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
        Schema::create('articoli', function (Blueprint $table) {
            $table->id();
            $table->string('codice', 13)->unique();
            $table->string('descrizione', 30)->index();
            $table->char('unitadimisura', 2);
            $table->integer('qtainiziale')->nullable();
            $table->double('valiniziale', 9, 2)->nullable();
            $table->integer('qtacarichi')->nullable();
            $table->double('valcarichi', 9, 2)->nullable();
            $table->integer('qtascarichi')->nullable();
            $table->double('valscarichi', 9, 2)->nullable();
            $table->double('iva', 4, 2);
            $table->double('przvendita', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articoli');
    }
};
