<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Consultation>
 */
class ConsultationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $beginning_drug_use = [
            'moins_de_2_ans',
            '2_a_5_ans',
            '5_a_10_ans',
            'plus_de_10_ans'
        ];

        $motivation_to_use_drug = [
            'curiosite' ,
            'suivisme_des_amis',
            'autres'
        ];

        $current_motivation_to_use_drug = [
            'manque',
            'habitude',
            'sommeil',
            'appetit',
            'plaisir',
            'courage'
        ];

        $temps_maximal_abstinence = [
            'moins_une_semaine',
            '1_semaine',
            '2_a_4_semaines',
            'plus_1_mois'
        ];

        $try_to_stop_drop = [
            'jamais',
            'une_fois',
            'plusieurs_fois'
        ];

        $motivation_to_stop = [
            'jamais',
            'une_fois',
            'plusieurs_fois',
        ];

        $type_of_drug_and_ca = [
            'cigarette',
            'alcool',
            'thai',
            'caillou',
            'tramol',
            'autres'
        ];

        $type_of_relation_with_drug = [
            'abus',
            'dependance_1',
            'dependance_2',
            'dependance_3'
        ];

        $amaigrissement = [
            'oui_un_peu',
            'beaucoup',
            'non'
        ];

        $teint_sombre = [
            'oui_un_peu',
            'beaucoup',
            'non'
        ];

        $insomnie_de_manque = [
            'oui_un_peu',
            'beaucoup',
            'non'
        ];

        $cauchemars = [
            'oui_un_peu',
            'beaucoup',
            'non'
        ];

        $hallucination = [
            'oui_un_peu',
            'beaucoup',
            'non'
        ];

        $trouble_somatique = [
            'oui_un_peu',
            'beaucoup',
            'non'
        ];

        $delire_trouble_du_comportement = [
            'oui_un_peu',
            'beaucoup',
            'non'
        ];

        $probleme_avec_loi = [
            'cellule',
            'prison',
            'jamais'
        ];

        $epanouissement_affectif = [
            'oui_un_peu',
            'beaucoup',
            'non'
        ];

        $epanouissement_sexuel = [
            'oui_un_peu',
            'beaucoup',
            'non'
        ];


        return [
            'beginning_drug_use' => $beginning_drug_use[rand(0,3)],
            'motivation_to_use_drug' => $motivation_to_use_drug[rand(0,2)],
            'current_motivation_to_use_drug' => $current_motivation_to_use_drug[rand(0,5)],
            'temps_maximal_abstinence' => $temps_maximal_abstinence[rand(0,3)],
            'try_to_stop_drop' => $try_to_stop_drop[rand(0,2)],
            'motivation_to_stop' => $motivation_to_stop[rand(0,2)],
            'type_of_drug_and_ca' => $type_of_drug_and_ca[rand(0,5)],
            'tolerance_and_drug_switching' => fake()->sentence(),
            'type_of_relation_with_drug' => $type_of_relation_with_drug[rand(0,3)],
            'amaigrissement' => $amaigrissement[rand(0,2)],
            'teint_sombre' => $teint_sombre[rand(0,2)],
            'insomnie_de_manque' => $insomnie_de_manque[rand(0,2)],
            'cauchemars' => $cauchemars[rand(0,2)],
            'hallucination' => $hallucination[rand(0,2)],
            'trouble_somatique' => $trouble_somatique[rand(0,2)],
            'delire_trouble_du_comportement' => $delire_trouble_du_comportement[rand(0,2)],
            'probleme_avec_loi' => $probleme_avec_loi[rand(0,2)],
            'epanouissement_affectif' => $epanouissement_affectif[rand(0,2)],
            'epanouissement_sexuel' => $epanouissement_sexuel[rand(0,2)],
            'frequency_and_consumption' => fake()->sentence(),
            'investment_in_ca' => fake()->sentence(),
            'general_state' => fake()->sentence(),
            'respiratory_sign' => fake()->sentence(),
            'neurology_sign' => fake()->sentence(),
            'psychiatric_disorder' => fake()->sentence(),
            'other' => fake()->sentence(),
            'medical_surgical' => fake()->sentence(),
            'allergic' => fake()->sentence(),
            'psychiatric' => fake()->sentence(),
            'traumatologies' => fake()->sentence(),
        ];
    }
}
