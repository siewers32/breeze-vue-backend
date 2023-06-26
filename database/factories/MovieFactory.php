<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Xylis\FakerCinema\Provider\Movie as FakeMovie;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
  


    
    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new FakeMovie($faker));
        return [
            'title' => $faker->movie,
            'year' => random_int(1975, 2022),
        ];    
    }
}