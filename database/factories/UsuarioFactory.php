<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstNameMale,
            'apellido' => $this->faker->lastName,
            'telefono' => $this->faker->ean8,
            'dni'=> $this->faker->ean8,
            'edad' => $this->faker->numberBetween($min = 10, $max = 40),
            'email' => $this->faker-> freeEmail, 
            'password' => $this->faker->word,
        ];
    }
}
