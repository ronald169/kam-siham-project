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
        Schema::create('psychopathologies', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('histoire_maladie');

            // Examen Psychatrique

            // Presentation
            $table->string('tenue');
            $table->string('aspect_physique');
            $table->string('mimique');
            $table->string('demarche');
            $table->string('regard');
            $table->string('autre_presentation');

            $table->string('contact');

            // Comportement
            $table->string('agitation');
            $table->string('impulsions');
            $table->string('stupeur');
            $table->string('catalepsie');
            $table->string('tics');
            $table->string('autre_comportement');

            // Sommeil
            $table->string('insomnie');
            $table->string('somnolence_diurne');
            $table->string('hypersomnie');
            $table->string('perturbation_activite_onirique');
            $table->string('autre_sommeil');

            // Conduites alimentaires
            $table->string('restriction_alimentaire');
            $table->string('refus_alimentaire');
            $table->string('exces_alimentaire');
            $table->string('exces_boissons');
            $table->string('autre_conduite_alimentaire');

            // Comportement sexuel et relations amoureuses
            $table->string('orientation');
            $table->string('frequence');
            $table->string('masturbation');
            $table->string('impuissance');
            $table->string('autre_relation_sexuel_amoureuse');

            // Trouble des conduites socials
            $table->string('idee_cuicidaire');
            $table->string('tentative_suicide');
            $table->string('equivalent_suicidaire');
            $table->string('fugues');
            $table->string('vol_pathologique');
            $table->string('attentat_au_moeur');
            $table->string('autre_trouble_des_conduite_social');

            // Conduites addictives
            $table->string('alcoolisme');
            $table->string('tabagisme');
            $table->string('autres_toxicomanie');

            // Troubles du langage
            $table->string('trouble_du_langage');

            // Trouble de la memoire
            $table->string('trouble_de_la_memoire');

            // Trouble du cours de la pensee
            $table->string('trouble_du_cours_de_la_pense');

            // Trouble du contenu de la pensee
            $table->string('trouble_du_contenu_de_la_pensee');

            // Distorsion globale de la pense
            $table->string('distorsion_globale_de_la_pense');

            // trouble du jugement
            $table->string('trouble_du_jugement');

            // trouble des activites perceptives
            $table->string('hallucination');

            // trouble de la vigilance / conscience
            $table->string('attention');
            $table->string('orientation_temporo_spaciale');
            $table->string('hypo_hyper_vigilance');
            $table->string('etats_crepusculaires');
            $table->string('etats_oniroides');
            $table->string('etats_seconds');
            $table->string('autre_trouble_de_vigilance');

            // Ttrouble de lexpression des affects
            $table->string('trouble_de_expression_des_affects');

            // Trouble de l'humeur
            $table->string('trouble_de_humeur');

            // Etat physique
            $table->string('constante');
            $table->string('etat_general');
            $table->string('examen_caardiovasculaire')->nullable();
            $table->string('examen_pulmonaire')->nullable();
            $table->string('examen_neurologique')->nullable();

            // Conclusion
            $table->text('conclusion');
            $table->text('discussion_diagnostique');

            // Bilan psychologique
            $table->text('traitement');

            $table->foreignId('user_id')->constrained('users')->restrictOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psychopathologies');
    }
};
