<?php

namespace Database\Factories;
use App\Models\Proizvodjac;

use Illuminate\Database\Eloquent\Factories\Factory;
class ProizvodjacFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model = Proizvodjac::class;
    /**
     * Define the model's default state.
     * 
     * @return array
     */
    public function definition()
    {
        return [
            'imeproizvodjaca'=> $this->faker->randomElement(['Colgate','Oral-B','Septodont','3M ESPE','Invlisalign']),
            'adresa'=> $this->faker->randomElement(['Bihać','Sarajevo','Banja Luka','Ljubljana','Zagreb','Mostar']),
            
        ];
    }
}

