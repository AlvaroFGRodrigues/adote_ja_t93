<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Residencia>
 */
class ResidenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_tipo_moradia'=>fake()->numberBetween(1,3),
            'id_tamanho_residencia'=>fake()->numberBetween(1,10),
            'endereço'=>fake()->address(),
            'CEP'=>fake()->numberBetween(1,10),
            'moradores'=>fake()->numberBetween(1,10)
        ];
    }
}
