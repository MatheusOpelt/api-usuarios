<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Let's truncate our existing records to start from scratch.
        Usuario::truncate();

        $faker = Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Usuario::create([
                'NOME' => $faker->firstName(),
                'SOBRENOME' => $faker->lastName(),
                'DATA_DE_NASCIMENTO' => $faker->date(),
                'NATURALIDADE' => $faker->country(),
                'HOBBY' => $faker->name(),
            ]);
        }
    }
}
