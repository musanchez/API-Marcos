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
        Schema::create('servants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('class'); // Saber, Archer, Lancer, etc.
            $table->string('noble_phantasm'); // Nombre del Noble Phantasm
            $table->text('description')->nullable(); // Descripción del servant
            $table->integer('strength');
            $table->integer('endurance');
            $table->integer('agility');
            $table->integer('mana');
            $table->integer('luck');
            $table->integer('noble_phantasm_level'); // Nivel del Noble Phantasm
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servants');
    }
};
