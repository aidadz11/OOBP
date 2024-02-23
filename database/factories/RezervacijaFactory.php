<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Rezervacija;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rezervacija>
 */
class RezervacijaFactory extends Factory
{
    protected $model=Rezervacija::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'datum'=> Carbon::now(),
            'usluga'=> $this->faker->randomElement(['Vađenje zuba','Čišćenje zuba','Izbjeljivanje zuba','Redovni stomatološki pregled','Oralne operacije']),
            'doktor'=> $this->faker->randomElement(['Aida Dzaferovic','Adna Brkić','Najra Midžić']),
        ];
    }
}
