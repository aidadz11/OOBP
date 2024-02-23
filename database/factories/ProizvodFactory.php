<?php

namespace Database\Factories;
use App\Models\Proizvod;

use Illuminate\Database\Eloquent\Factories\Factory;
class ProizvodFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model = Proizvod::class;
    /**
     * Define the model's default state.
     * 
     * @return array
     */
    public function definition()
    {
        return [
            'nazivproizvoda'=> $this->faker->randomElement(['Zubne krunice','Konci za zube','Vodica za ispiranje','Ortodonski aparati', 'Folije za zube','Pasta za zube','Četkice za zube']),
            'cijenaproizvoda'=> $this->faker->randomDigit(),
            'proizvodjac'=>$this->faker->randomElement(['Colgate','Septodont','Oral-B','3M ESPE','Invisalign']),
            
        ];
    }
}

