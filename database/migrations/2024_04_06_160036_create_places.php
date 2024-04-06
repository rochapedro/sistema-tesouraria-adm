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
        Schema::create('places', function (Blueprint $table) {
            $table->id('place-id');
            $table->unsignedBigInteger('administrative-code-id');
            $table->foreign('administrative-code-id')->references('id')->on('administrative_codes')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('sector-id');
            $table->foreign('sector-id')->references('id')->on('sectors')->onDelete('cascade')->onUpdate('cascade');
            $table->string('description', 100)->unique()->nullable(false);
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};
