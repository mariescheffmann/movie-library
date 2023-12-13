<?php

namespace Database\Factories;

use \App\Models\MockupComment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class MockupCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = MockupComment::class;

    public function definition()
    {
        return [
            'content' => fake()->paragraph,
        ];
    }
}
