<?php

namespace Database\Factories;

use App\Models\BlogPost;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = BlogPost::class;

    public function definition()
    {
        $title = $this->faker->sentence;

        $body = $this->faker->text(200);


        return [
            'featured_image' => "-",
            'title' => $title,
            'body' => $body,
            'user_id' => 1,
        ];
    }
}
