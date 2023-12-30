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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('Blood_Group');
            $table->string('Fever');
            $table->string('Flu');
            $table->string('Cough');
            $table->string('Appetite');
            $table->string('Cholestrol');
            $table->string('BP');
            $table->string('status');
            $table->string('patient_name')->default();
            $table->foreign('patient_name')->references('name')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
