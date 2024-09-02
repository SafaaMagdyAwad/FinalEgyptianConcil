<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->title(),
            'content'=>fake()->text(),
            'views'=>fake()->numberBetween(0,10),
            'published'=>fake()->boolean(),
            'trending'=>fake()->boolean(),
            'image'=>basename(fake()->image(public_path('assets/admin/images/topics'))),
            'category_id'=>fake()->numberBetween(1,10),
        ];
    }
}
