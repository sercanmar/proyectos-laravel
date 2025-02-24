<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use Faker\Factory as Faker;

class UsuariosSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 3; $i++) { 
            Usuario::create([
                'login' => $faker->unique()->word(),
                'password' => $faker->word(),
            ]);
        }
    }
}
