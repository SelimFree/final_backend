<?php

namespace Database\Factories;

use App\Models\PostCate;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostCateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PostCate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'postId' => Post::factory(),
            'categoryName' => Category::factory(),
        ];
    }
}
