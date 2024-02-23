<?php

namespace Database\Factories;
use App\Models\Pacijent;

use Illuminate\Database\Eloquent\Factories\Factory;
class PacijentFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model = Pacijent::class;
    /**
     * Define the model's default state.
     * 
     * @return array
     */
    public function definition()
    {
        return [
            'ime'=> $this->faker->name(),
            'prezime'=> $this->faker->lastname(),
            'godine'=>$this->faker->numberBetween(1,90),
            
        ];
    }
}
