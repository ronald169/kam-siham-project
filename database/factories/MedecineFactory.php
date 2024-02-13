<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medecine>
 */
class MedecineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'motif_de_consultation' => fake()->paragraphs(1, true),
            'histoire_de_la_maladie' => fake()->paragraphs(1, true),
            'antecedent' => fake()->paragraphs(1, true),
            'examen_physique' => fake()->paragraphs(1, true),
            'hypothese_diagnostique' => fake()->paragraphs(1, true),
            'examen_demande' => fake()->paragraphs(1, true),
            'user_id' => rand(1,3)
        ];
    }
}
