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
        Schema::create('medecines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('motif_de_consultation');
            $table->text('histoire_de_la_maladie');
            $table->text('antecedent');
            $table->text('examen_physique');
            $table->text('hypothese_diagnostique');
            $table->text('examen_demande');

            $table->foreignId('user_id')->constrained('users')->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medecines');
    }
};
