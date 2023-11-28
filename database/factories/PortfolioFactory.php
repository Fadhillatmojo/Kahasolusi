<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portfolio>
 */
class PortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'portfolio_title' => $this->faker->sentence(2),
            'portfolio_desc' => $this->faker->paragraph(),
            'portfolio_url' => $this->faker->url(),
            'portfolio_image_url' => $this->faker->imageUrl(640, 480, 'portfolio', true),
            'portfolio_year' => $this->faker->year(),
            'admin_id' => 1,
        ];
    }
}
