<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\postingan>
 */
class postinganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
  'slug' => fake()->slug(),
  'kategori_id' => rand(1,4),
  'user_id' => rand(1,5),
  'judul' => fake()->sentence(),
  'body' => fake()->paragraph(10,20)
        ];
    }
}
