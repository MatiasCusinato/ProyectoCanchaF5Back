<?php

namespace Database\Factories;

use App\Models\Turno;
use Illuminate\Database\Eloquent\Factories\Factory;

class TurnoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Turno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_usuario' => $this->faker->numberBetween($min = 1, $max = 10),
            'id_cobranza' => $this->faker->numberBetween($min = 1, $max = 30),
            'nombre_turno' => $this->faker->lastName,
            'tipo_turno' => $this->faker->numberBetween($min = 1, $max = 4),
            'fecha_Desde' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'fecha_Hasta' => $this->faker->date($format = 'Y-m-d', $max = 'now'), 
        ];
    }
}
