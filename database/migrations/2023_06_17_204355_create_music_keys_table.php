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
        Schema::create('music_keys', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('transpositionDown');
            $table->integer('transpositionUp');
            $table->string('chord1');
            $table->string('chord2');
            $table->string('chord3');
            $table->string('chord4');
            $table->string('chord5');
            $table->string('chord6');
            $table->string('chord7');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('music_keys');
    }
};
