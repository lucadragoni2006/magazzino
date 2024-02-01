<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articolo>
 */
class ArticoloFactory extends Factory
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
            'descrizione' => $this->faker->text('30'),
            'unitadimisura' => $this->faker->randomElement(['kg', 'lt', 'mt']),
            'qtainiziale' => $this->faker->numberBetween(1, 100),
            'valiniziale' => $this->faker->randomFloat(2, 3, 100),
            'qtacarichi' => $this->faker->numberBetween(1, 100),
            'valcarichi' => $this->faker->randomFloat(2, 3, 100),
            'qtascarichi' => $this->faker->numberBetween(1, 100),
            'valscarichi' => $this->faker->randomFloat(2, 3, 100),
            'iva' => $this->faker->randomFloat(2, 0, 1),
            'przvendita' => $this->faker->randomFloat(2, 3, 100)
        ];
    }
}
