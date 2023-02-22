<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "productos"=>$this->faker->randomElement(['Medicamento','Pastillas','Alcohol','Vendas']),
            "lote" =>$this->faker->randomNumber(9,true),
            "caducidad" => $this->faker->date(),
            "imagen"=>function(array $obj){
                return $obj['productos'].".png";
            }
        ];
    }
}
