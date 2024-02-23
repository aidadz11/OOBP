<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\ObavljanjeUsluge;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ObavljanjeUsluge>
 */
class ObavljanjeUslugeFactory extends Factory
{
    protected $model = ObavljanjeUsluge::class;
    /**
     * Define the model's default state.
     * 
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'datum'=>Carbon::now(),
            'usluga'=> $this->faker->randomElement(['Vađenje zuba','Postavljanje implanta','Oralne operacije']),
            'doktor'=> $this->faker->randomElement(['Aida Dzaferovic','Adna Brkić','Najra Midžić'],)
        ];
    }
}
