<?php

namespace Database\Factories;

use App\Enums\State;
use App\Enums\Type;
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
            'title' => 'title',
            'state' => State::Pending,
            'type' => Type::Article()
        ];
    }
}
