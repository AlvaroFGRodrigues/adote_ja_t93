<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_porte'=>fake()->numberBetween(1,3),
            'id_genero'=>fake()->numberBetween(1,2),
            'id_tipo'=>fake()->numberBetween(1,2),
            'id_controle'=>fake()->numberBetween(1,10),
            'nome'=>fake()->name(),
            'idade'=>fake()->date(),
            'raca_pet'=>fake()->name(),
            'descricao'=>fake()->text(),
            'vacinas'=>fake()->text(),
            'racao'=>fake()->name(),
            'historico'=>fake()->text()


        ];
    }
}
