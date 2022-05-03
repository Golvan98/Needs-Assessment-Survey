<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'departmentname' => $this->faker->randomElement(['CS', 'IS', 'IT', 'CA',]),
            'coursename' => $this->faker->randomElement(['Bachelor of Science in Computer Science', 'Bachelor of Science in Information Technology', 'Bachelor of Science in Information Systems', 'Bachelor of Science in Information Technology', 'Bachelor of Science in Computer Applications']),
            'coursecode' => $this->faker->randomElement(['BSCS', 'BSIS', 'BSIT', 'BSCA', ]),
            
        ];
    }
}
