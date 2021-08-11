<?php

namespace Database\Factories;

use App\Models\Articulo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticuloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Articulo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->lastName,
            'precio' => $this->faker->numberBetween($min = 30, $max = 1000),
            'stock_minimo' => $this->faker->numberBetween($min = 100, $max = 200),
            'stock_maximo' => $this->faker->numberBetween($min = 300, $max = 500),
        ];
    }
}
