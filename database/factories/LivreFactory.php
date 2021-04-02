<?php

namespace Database\Factories;

use App\Models\Livre;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Livre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid'           => $this -> faker->uuid,
            'titre'          => $this -> faker->realText($maxNbChars = 200, $indexSize = 2),
            'auteur'         => $this -> faker->realText($maxNbChars = 200, $indexSize = 2),
            'prix'           => $this -> faker->numberBetween($min = 500, $max = 10000),
            'quantite'       => $this -> faker->numberBetween($min = 0, $max = 100) ,
                    
        ];
    }
}
