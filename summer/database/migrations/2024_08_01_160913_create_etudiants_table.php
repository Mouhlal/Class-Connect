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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nomEt');
            $table->string('image');
            $table->string('prenomEt');
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('nv_scolaires_id');
            $table->foreign('nv_scolaires_id')->references('id')->on('nv_scolaires');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
