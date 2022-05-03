<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'coursename' => $this->faker->unique()->randomElement(['Bachelor of Science in Information Technology', 'Bachelor of Science in Information Systems', 'Bachelor of Science in Computer Science', 'Bachelor of Science in Computer Application']),
            'coursecode' => $this->faker->unique()->randomElement(['BSIT', 'BSIS', 'BSCS', 'BSCA'])
        ];
    }
}
