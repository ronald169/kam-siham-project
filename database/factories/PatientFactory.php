<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sex = ['homme', 'femme'];

        $tribut = ['Fangs','Bamiléké','Bamoun',
            'Douala','Louembous',
            'Bassas','Peuls','Tikars',
            'Mandaras','Makas','Makas',
            'Chambas','Mboum','Haoussa'];

        $rang = ['premier','dernier','fils_ou_fille_unique','autre'];

        $age = [
            'moins_de_15',
            '16_a_20',
            '21-a_25',
            '26_a_30',
            'plus_de_30'

        ];

        $level = [
            'primaire',
            'brevete',
            'secondaire_sans_bac',
            'bachelier',
            'diplome_du_sup',
        ];

        $religion = [
            'catholique',
            'musulman',
            'tj',
            'evangelique',
            'reveil',
            'autre'
        ];

        $relation = [
            'very_bad',
            'bad',
            'enough_good',
            'good',
            'very_good',
        ];

        $p = ['pas_de_relation','privilegie','ami','familier'];

        $f = [
            'very_absent',
            'absent',
            'enough_present',
            'present',
            'very_present',
        ];

        $n_f = ['pas_amis','1_a_5','5_a_10','plus_de_10'];

        $n_fi = ['pas_ami_intime','1_a_2','plus_de_2'];

        $t_f = [
            'parents_separes',
            'divorces',
            'jamais_maries',
            'famille_fonctionnelle',
        ];

        return [
            'date_of_birth' => fake()->date(),
            'sex' => $sex[rand(0,1)],
            'place' => fake()->city(),
            'tribut' => $tribut[rand(0,13)],
            'religion' => $religion[rand(0,5)],
            'order_child' => $rang[rand(0,3)],
            'age' => $age[rand(0,4)],
            'study_level' => $level[rand(0,4)],
            'name' =>fake()->firstName() . ' ' . fake()->lastName(),
            'childhood' => fake()->realText,
            'family_conflict' => fake()->sentence(),
            'health_problem' => fake()->sentence(),
            'father_name' => fake()->name(),
            'father_age' => rand(35, 65),
            'father_religion' => $religion[rand(0,5)],
            'father_profession' => fake()->jobTitle(),
            'father_health' => fake()->word(),
            'father_level_school' => $level[rand(0,4)],
            'mother_name' => fake()->firstNameFemale() . ' ' . fake()->lastName(),
            'mother_age' => rand(28, 45),
            'mother_religion' => $religion[rand(0,5)],
            'mother_profession' => fake()->jobTitle(),
            'mother_health' => fake()->word(),
            'mother_level_school' => $level[rand(0,4)],
            'relation_between_parent' => $relation[rand(0,4)],
            'relation_between_sibling' => $relation[rand(0,4)],
            'privileged_relationship' => $p[rand(0,3)],
            'frequency_stay_at_home_parent' => $f[rand(0,4)],
            'number_of_child_living_at_home' => rand(0,5),
            'children' => null,
            'friend_number' => $n_f[rand(0,3)],
            'true_friend_number' => $n_f[rand(0,3)],
            'intimate_friend' => $n_fi[rand(0,2)],
            'nature_of_relation' => $relation[rand(0,4)],
            'divertissement' => fake()->word(),
            'nature_relation_with_yourself' => $relation[rand(0,4)],
            'problem_with_you' => fake()->sentence(),
            'type_of_family' => $t_f[rand(0,3)],
            'judgment_yourself' => fake()->sentence(),
            'what_expect_from_psychologist' => fake()->sentence(),
            'user_id' => rand(1,3)
        ];
    }
}
