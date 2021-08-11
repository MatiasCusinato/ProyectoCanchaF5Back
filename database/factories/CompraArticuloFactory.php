<?php

namespace Database\Factories;

use App\Models\CompraArticulo;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompraArticuloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CompraArticulo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_cobranza' => $this->faker->numberBetween($min = 1, $max = 30),
            'id_articulo' => $this->faker->numberBetween($min = 1, $max = 20),
            'cantidad' => $this->faker->numberBetween($min = 1, $max = 5),
        ];
    }
}
