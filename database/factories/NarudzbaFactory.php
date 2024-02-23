<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Narudzba;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Narudzba>
 */
class NarudzbaFactory extends Factory
{
    protected $model=Narudzba::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'datum'=>Carbon::now(),
            'proizvod'=>$this->faker->randomElement(['Zubne krunice','Konci za zube','Vodica za ispiranje','Ortodonski aparati', 'Folije za zube','Pasta za zube','Četkice za zube']),
            'proizvodjac'=>$this->faker->randomElement(['Colgate','Oral-B','Septodont','3M ESPE','Invlisalign']),
            'adresa'=>$this->faker->randomElement(['Bihać']),
        ];
    }
}
