<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->word ,
            'descripcion'=>$this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'precioinicial'=>$this->faker->randomFloat($nbMaxDecimal=NULL, $min=1000, $max=1500),
            'preciofinal'=>$this->faker->randomFloat($nbMaxDecimal=NULL, $min=100, $max=999),
            'imagen'=>$this->faker->imageUrl($width = 820, $height = 520)
        ];
    }
}
