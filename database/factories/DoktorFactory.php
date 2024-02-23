<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Doktor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doktor>
 */
class DoktorFactory extends Factory
{
    protected $model=Doktor::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ime'=> $this->faker->name(),
            'prezime'=> $this->faker->lastname(),
            'oblast'=> $this->faker->randomElement(['Oralna kirurgija','Estetska kirurgija','Opća stomatologija']),
        ];
    }
}
