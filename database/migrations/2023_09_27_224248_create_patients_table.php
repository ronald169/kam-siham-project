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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            // Identity
            $table->date('date_of_birth');
            $table->string('sex');
            $table->string('place');
            $table->string('tribut');
            $table->string('religion');
            $table->string('order_child');
            $table->string('age');
            $table->string('study_level');
            $table->string('name');
            $table->string('type_of_family');

            // antecedent
            $table->text('childhood');

            $table->string('family_conflict');
            $table->string('health_problem');

            // family relation
            // pere
            $table->string('father_name');
            $table->string('father_age');
            $table->string('father_religion');
            $table->string('father_profession');
            $table->string('father_health');
            $table->string('father_level_school');
            // mere
            $table->string('mother_name');
            $table->string('mother_age');
            $table->string('mother_religion');
            $table->string('mother_profession');
            $table->string('mother_health');
            $table->string('mother_level_school');

            // Marital status of patients or couple
            $table->string('relation_between_parent');
            $table->string('relation_between_sibling');
            $table->string('privileged_relationship');
            $table->string('frequency_stay_at_home_parent');
            $table->unsignedInteger('number_of_child_living_at_home')->nullable();
            $table->json('children')->nullable();

            // social relationship
            $table->string('friend_number');
            $table->string('true_friend_number');
            $table->string('intimate_friend');
            $table->string('nature_of_relation');
            $table->string('divertissement');

            // Other
            $table->text('nature_relation_with_yourself');
            $table->text('problem_with_you');
            $table->text('judgment_yourself');
            $table->text('what_expect_from_psychologist');

            // Relation
            $table->foreignId('user_id')->constrained('users')->restrictOnDelete();

            // Softdeletes
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
