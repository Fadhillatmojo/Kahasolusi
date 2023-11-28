<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tool>
 */
class ToolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tool_title' => $this->faker->word(),
            'tool_desc' => $this->faker->sentence(1),
            'tool_image_url' => $this->faker->imageUrl(640, 480, 'tool', true),
            'admin_id' => 1,
        ];
    }
}
