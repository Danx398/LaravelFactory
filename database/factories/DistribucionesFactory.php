<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DistribucionesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "Calle"=>$this->faker->streetName(),
            "Ubicacion"=>$this->faker->address(),
            "numero"=>$this->faker->buildingNumber(),
            "delegacion"=>$this->faker->city(),
            "pais"=>$this->faker->country()
        ];
    }
}
