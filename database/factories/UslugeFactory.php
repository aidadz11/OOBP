<?php

namespace Database\Factories;
use App\Models\Usluge;

use Illuminate\Database\Eloquent\Factories\Factory;
class UslugeFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model = Usluge::class;
    /**
     * Define the model's default state.
     * 
     * @return array
     */
    public function definition()
    {
        return [
            'nazivusluge'=> $this->faker->randomElement(['Vađenje zuba','Postavljanje implanta','Oralne operacije']),
            'cijenausluge'=> $this->faker->randomDigit(),
            'trajanjeusluge'=>$this->faker->numberBetween(1,200),
            'vrstausluge'=>$this->faker->randomElement(['Oralna kirurgija','Estetska kirurgija','Opća stomatologija']),
            'doktor'=>$this->faker->randomElement(['Aida Dzaferovic','Adna Brkić','Najra Midžić']),
        ];
    }
}

