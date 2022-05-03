<?php

namespace Database\Factories;

use App\Models\College;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\College>
 */
class CollegeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
         $collegecodes = $this->faker->unique()->randomElement(['COE', 'CCS', 'CASS', 'CBAA', 'CSM', 'CED', 'CON']);



        $colleges = [
            'collegecode' =>$collegecodes,
            'collegename' => $this->faker->unique()->randomElement(['College of Computer Studies', 'College of Arts and Social Sciences', 'College of Science and Mathematics', 'College of Business Adminstration', 'College of Education', 'College of Nursing']),
        ];


        foreach($colleges as $college)
        {
            if(['collegecode'] == 'COE')
            {
                $college['collegename'] = $this->faker->randomElement(['College of Engineering']);
            }
        }

        return $college;
    }
}
