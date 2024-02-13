<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Psychopathology>
 */
class PsychopathologyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $contact = [
            'facile',
            'difficile',
            'superficiel',
            'hyper_syntone'
        ];

        $trouble_du_langage = [
            'logorrhee',
            'mutisme',
            'mutacisme',
            'begaiement',
            'palilalie',
            'aphasies'
        ];

        $trouble_de_la_memoire = [
            'deficit_mnésique',
            'amnésie_de_fixation',
            'antéro_retrograde',
            'psychogene_ou_affective'
        ];

        $trouble_du_cours_de_la_pense = [
            'tachypsychie',
            'bradypsychie',
            'cohérence_des_idees',
            'coq_a_ane'
        ];

        $trouble_du_contenu_de_la_pensee = [
            'pensee_dereelle',
            'idees_fixes_obsedantes_delirantes_depressives',
            'mythomanie',
            'phobies',
            'idees_délirantes'
        ];

        $distorsion_globale_de_la_pense = [
            'autistique',
            'magique',
            'paralogique',
            'rationalisme morbide'
        ];

        $trouble_du_jugement = [
            'facilitation_du_jugement',
            'carence_du_jugement',
            'distorsion_du_jugement'
        ];

        $trouble_de_expression_des_affects = [
            'hyperemotivite',
            'defaut_emotivite',
            'inadequation'
        ];

        $trouble_de_humeur = [
            'depressive',
            'expansive',
            'euthymique'
        ];

        return [
            'name' => fake()->name(),
            'histoire_maladie' => fake()->paragraphs(1, true),
            'tenue' => fake()->sentence(),
            'aspect_physique' => fake()->sentence(),
            'mimique' => fake()->sentence(),
            'demarche' => fake()->sentence(),
            'regard' => fake()->sentence(),
            'autre_presentation' => fake()->sentence(),
            'contact' => $contact[rand(0,3)],
            'agitation' => fake()->sentence(),
            'impulsions' => fake()->sentence(),
            'stupeur' => fake()->sentence(),
            'catalepsie' => fake()->sentence(),
            'tics' => fake()->sentence(),
            'autre_comportement' => fake()->sentence(),
            'insomnie' => fake()->sentence(),
            'somnolence_diurne' => fake()->sentence(),
            'hypersomnie' => fake()->sentence(),
            'perturbation_activite_onirique' => fake()->sentence(),
            'autre_sommeil' => fake()->sentence(),
            'restriction_alimentaire' => fake()->sentence(),
            'refus_alimentaire' => fake()->sentence(),
            'exces_alimentaire' => fake()->sentence(),
            'exces_boissons' => fake()->sentence(),
            'autre_conduite_alimentaire' => fake()->sentence(),
            'orientation' => fake()->sentence(),
            'frequence' => fake()->sentence(),
            'masturbation' => fake()->sentence(),
            'impuissance' => fake()->sentence(),
            'autre_relation_sexuel_amoureuse' => fake()->sentence(),
            'idee_cuicidaire' => fake()->sentence(),
            'tentative_suicide' => fake()->sentence(),
            'equivalent_suicidaire' => fake()->sentence(),
            'fugues' => fake()->sentence(),
            'vol_pathologique' => fake()->sentence(),
            'attentat_au_moeur' => fake()->sentence(),
            'autre_trouble_des_conduite_social' => fake()->sentence(),
            'alcoolisme' => fake()->sentence(),
            'tabagisme' =>fake()->sentence(),
            'autres_toxicomanie' => fake()->sentence(),
            'trouble_du_langage' => $trouble_du_langage[rand(0,5)],
            'trouble_de_la_memoire' => $trouble_de_la_memoire[rand(0,3)],
            'trouble_du_cours_de_la_pense' => $trouble_du_cours_de_la_pense[rand(0,3)],
            'trouble_du_contenu_de_la_pensee' => $trouble_du_contenu_de_la_pensee[rand(0,4)],
            'distorsion_globale_de_la_pense' => $distorsion_globale_de_la_pense[rand(0,3)],
            'trouble_du_jugement' => $trouble_du_jugement[rand(0,2)],
            'hallucination' => fake()->sentence(),
            'attention' => fake()->sentence(),
            'orientation_temporo_spaciale' => fake()->sentence(),
            'hypo_hyper_vigilance' => fake()->sentence(),
            'etats_crepusculaires' => fake()->sentence(),
            'etats_oniroides' => fake()->sentence(),
            'etats_seconds' => fake()->sentence(),
            'autre_trouble_de_vigilance' => fake()->sentence(),
            'trouble_de_expression_des_affects' => $trouble_de_expression_des_affects[rand(0,2)],
            'trouble_de_humeur' => $trouble_de_humeur[rand(0,2)],
            'constante' => fake()->sentence(),
            'etat_general' => fake()->sentence(),
            'conclusion' =>fake()->paragraphs(2, true),
            'discussion_diagnostique' =>fake()->paragraphs(2, true),
            'traitement' =>fake()->paragraphs(2, true),
            'user_id' => rand(1,2),
        ];
    }
}
