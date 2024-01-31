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
            $table->integer('qtainiziale');
            $table->double('valiniziale', 7, 2);
            $table->integer('qtacarichi');
            $table->double('valcarichi', 7, 2);
            $table->integer('qtascarichi');
            $table->double('valscarichi', 7, 2);
            $table->double('iva', 2, 2);
            $table->double('przvendita', 6, 2);
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
