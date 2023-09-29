<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dono>
 */
class DonosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_status'=>fake()->numberBetween(1,3),
            'apto'=>fake()->numberBetween(0, 1),
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
