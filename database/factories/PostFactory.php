<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(), // Con $this->faker es lo mismo que 'fake() que se usa en UserFactory'
            'content' => $this->faker->text(100),
            'category' => $this->faker->word(),
            'published_at' => $this->faker->dateTime()
        ];
    }
}
