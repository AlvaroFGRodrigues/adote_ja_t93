<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adocao>
 */
class AdocaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_controle' => fake()->numberBetween(1,10),
            'id_funcionario' => fake()->numberBetween(1,10),
            'id_dono' => fake()->numberBetween(1,10),
            'adocao' => fake()->date(),
            'id_status_adocao' => fake()->numberBetween(1,3)
        ];
    }
}
