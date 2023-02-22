<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nombre" => $this->faker->name,
            "paterno" => $this->faker->lastName,
            "materno"=>$this->faker->lastName,
            "FechaNacimiento"=>$this->faker->date('Y-m-d','now'),
        ];
    }
}
