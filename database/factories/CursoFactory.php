<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
// para url amigables mediante un helper de laravel
use Illuminate\Support\Str;

class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence();
        return [
            'name' => $name,
            // para url amigables mediante un helper de laravel
            'slug' => Str::slug($name, '-'),
            'description' => $this->faker->paragraph() ,
            'category' => $this->faker->randomElement(['desarrollo Web', 'Diseño Web'])
        ];
        // se llama en el seeder
    }
}
