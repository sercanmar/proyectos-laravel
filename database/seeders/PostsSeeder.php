<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Usuario;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $usuarios = Usuario::all();

        foreach ($usuarios as $usuario) {

            for ($i = 1; $i <= 3; $i++) { 
                Post::create([
                    'titulo' => $faker->catchPhrase(),
                    'contenido' => $faker->text(),
                    'usuario_id' => $usuario->id
                ]);
            }
    
        }
    }
}