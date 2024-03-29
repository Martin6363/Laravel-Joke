<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
    public function definition()
    {
        $userId = User::inRandomOrder()->first();
        $companyId = Category::inRandomOrder()->first();

        return [
            "title"=> fake()->title(),
            "description" => fake()->paragraph(),
            "category_id"=> $companyId ? $companyId->id : '',
            "user_id" => $userId ? $userId->id : '',
            "image" => fake()->imageUrl(640, 480, 'animals', true),
            "published" => fake()->boolean(),
        ];
    }
}
