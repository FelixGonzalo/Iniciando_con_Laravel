<?php

namespace Database\Seeders;

use App\Models\Curso;
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

        // $curso = new Curso();W
        // $curso->name = "Laravel";
        // $curso->description = "El mejor framework de PHP";
        // $curso->categoria = "Desarrollo web";
        // $curso->save();

        // $this->call(CursoSeeder::class);
        Curso::factory(50)->create();


    }
}
