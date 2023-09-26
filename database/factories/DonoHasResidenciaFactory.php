<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DonoHasResidencia>
 */
class DonoHasResidenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_dono'=>fake()->numberBetween(1,10),
            'id_residenica'=>fake()->numberBetween(1,10)
                ];
    }
}
