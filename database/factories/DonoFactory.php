<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dono>
 */
class DonoFactory extends Factory
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
            'id_status'=>fake()->numberBetween(1,3),
            'apto'=>fake()->tinyint(1,2),
            'nome'=>fake()->name(),
            'nascimento'=>fake()->date(),
            'email'=>fake()->email(),
            'telefone'=>fake()->phoneNumber(),
            'cpf'=>fake()->numberBetween(11111111111,99999999999),
            'motivo'=>fake()->text(),
            'historico'=>fake()->text()
        ];
    }
}
