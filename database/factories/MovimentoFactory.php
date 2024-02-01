<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movimento>
 */
class MovimentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codice' => $this->faker->unique()->numerify('#############'),
            'causale' => $this->faker->numberBetween(0, 4),
            'numdocumento' => $this->faker->numberBetween(10000, 99999),
            'datadocumento' => $this->faker->date(),
            'qtamovimentata' => $this->faker->numberBetween(1, 100),
            'valunitario' => $this->faker->randomFloat(2, 3, 100),
            'sconto' => $this->faker->randomFloat(2, 3, 100),
        ];
    }
}
