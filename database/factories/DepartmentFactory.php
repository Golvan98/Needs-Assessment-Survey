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
            'departmentname' => $this->faker->unique()->randomElement(['Department of Computer Science', 'Department of Information Systems', 'Department of Information Technology', 'Department of Computer Applications',]),
        ];
    }
}
