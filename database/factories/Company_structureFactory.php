<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'person_name'=>$this->faker->name(),
            'person_position'=>$this->faker->jobTitle(),
            'person_image_url'=>$this->faker->imageUrl(640, 480, 'person', true),
            'admin_id'=>Arr::random([1,2,3])
        ];
    }
}
