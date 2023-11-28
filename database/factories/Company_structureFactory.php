<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company_structure>
 */
class Company_structureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'person_position' => $this->faker->jobTitle(),
            'person_image_url' => $this->faker->imageUrl(640, 480, 'person', true),
            'admin_id' => Arr::random([1, 2, 3]),
        ];
    }
}
