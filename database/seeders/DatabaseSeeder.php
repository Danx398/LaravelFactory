<?php

namespace Database\Seeders;

use Database\Factories\DistribucionesFactory;
use Database\Factories\PersonalFactory;
use Database\Factories\ProductoFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DistribucionesFactory::factoryForModel('Distribuciones')->count(10)->create();
        PersonalFactory::factoryForModel('Personal')->count(10)->create();
        ProductoFactory::factoryForModel('Producto')->count(10)->create();
    }
}
