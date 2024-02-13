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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();

            // Histoire des conduites addictives
            $table->string('beginning_drug_use');
            $table->string('motivation_to_use_drug');
            $table->string('current_motivation_to_use_drug');
            $table->string('tolerance_and_drug_switching');
            $table->string('try_to_stop_drop');
            $table->string('motivation_to_stop');
            $table->string('type_of_drug_and_ca');
            $table->string('temps_maximal_abstinence');

            // CONSEQUENCES DE LA CONSOMMATION
            $table->string('type_of_relation_with_drug');
            $table->string('amaigrissement');
            $table->string('teint_sombre');
            $table->string('insomnie_de_manque');
            $table->string('cauchemars');
            $table->string('hallucination');
            $table->string('trouble_somatique');
            $table->string('delire_trouble_du_comportement');
            $table->string('probleme_avec_loi');
            $table->string('epanouissement_affectif');
            $table->string('epanouissement_sexuel');

            // Evaluation de la consommantion et de la dependance
            $table->string('frequency_and_consumption');
            $table->string('investment_in_ca');

            // Tableau clinique
            $table->string('general_state');
            $table->string('respiratory_sign');
            $table->string('neurology_sign');
            $table->string('psychiatric_disorder');
            $table->string('other');

            // Antecedents
            $table->string('medical_surgical');
            $table->string('allergic');
            $table->string('psychiatric');
            $table->string('traumatologies');
            // $table->string('sexuality');

            // Conclusion et CAT
            $table->string('psychology_assessment')->nullable();
            $table->string('biology_assessment')->nullable();
            // $table->string('tolerance_and_drug_switching');

            // relation
            $table->foreignId('patient_id')->constrained('patients');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
