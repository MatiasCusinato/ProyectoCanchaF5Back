<?php

namespace Database\Factories;

use App\Models\Cobranza;
use Illuminate\Database\Eloquent\Factories\Factory;

class CobranzaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cobranza::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'precio' => $this->faker->numberBetween($min = 400, $max = 1000),
            'estado' => $this->faker->numberBetween($min = 1, $max = 3),
        ];
    }
}
