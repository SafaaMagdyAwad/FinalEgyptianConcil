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
        $images=['topic1.png','topic2.png','topic3.png','topic4.png','topic5.png','topic6.png','topic7.png','topic8.png','topic9.png','topic10.png','topic11.png','topic12.png'];
        $topics=['Podcast','Advertising','Web Design','Finance','Project Management'];
        return [
            'title'=>fake()->randomElement($topics),
            'content'=>fake()->text(3000),
            'views'=>fake()->numberBetween(0,10),
            'published'=>fake()->boolean(),
            'trending'=>fake()->boolean(),
            'image'=>fake()->randomElement($images),
            'category_id'=>fake()->numberBetween(1,5),
        ];
    }
}
