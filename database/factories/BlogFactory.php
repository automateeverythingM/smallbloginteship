<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(3),
            'blog_body' => $this->faker->text(400),
            "user_id" => $this->faker->numberBetween(1, 9),
            'status' => $this->faker->boolean(50),
            'likes' => $this->faker->numberBetween(1, 250),
            'blog_hero_img' => $this->faker->imageUrl(640, 480),
        ];
    }
}
