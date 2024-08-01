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
        Schema::create('emploies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('modules_id');
            $table->foreign('modules_id')->references('id')->on('modules');
            $table->unsignedBigInteger('nv_scolaires_id');
            $table->foreign('nv_scolaires_id')->references('id')->on('nv_scolaires');
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->date('jours');
            $table->time('debutCours');
            $table->time('finCours');
            $table->string('salles');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emploies');
    }
};
