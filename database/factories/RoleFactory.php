<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'role_name'=>$this->faker->name(),
            'role_image_url'=>$this->faker->imageUrl(640, 480, 'role', true),
            'admin_id'=>Arr::random([1,2,3])
        ];
    }
}
