<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anime>
 */
class AnimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
              'judul' => $this->faker->sentence(mt_rand(1, 2)),
              'rilis' => $this->faker->dateTime(),
              'rating' => $this->faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 10),
              'sinopsis' => $this->faker->sentence(mt_rand(50, 80)),
              'durasi' => $this->faker->time(),
              'episode' => $this->faker->randomNumber(5, false),
              'studio' => $this->faker->company(),
              'genre' => $this->faker->word(mt_rand(1,2)),
            //   echo $faker->imageUrl(640, 480, 'animals', true);
               'image' => null,
                'category_id' => mt_rand(1, 3)
        ];
    }
}
