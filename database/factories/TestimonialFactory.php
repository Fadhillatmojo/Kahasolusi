<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'testimonial_client' => $this->faker->name(),
            'testimonial_desc' => $this->faker->sentence(3),
            'testimonial_image_url' => $this->faker->imageUrl(640, 480, 'testimonial', true),
            'admin_id' => 1,
        ];
    }
}
