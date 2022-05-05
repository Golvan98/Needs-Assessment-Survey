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
        
         $collegecode = $this->faker->unique()->randomElement(['COE', 'CCS', 'CASS', 'CBAA', 'CSM', 'CED', 'CON']);



        $college = [
            'collegecode' =>$collegecode,
        ];
        

        if($collegecode == 'COE')
        {
            $college['collegename'] = $this->faker->randomElement(['College of Engineering']);
        }
        if($collegecode == 'CCS')
        {
            $college['collegename'] = $this->faker->randomElement(['College of Computer Science']);
        }
        if($collegecode == 'CASS')
        {
            $college['collegename'] = $this->faker->randomElement(['College of Arts and Social Sciences']);
        }
        if($collegecode == 'CBAA') 
        {
            $college['collegename'] = $this->faker->randomElement(['College of Economics, Business and Accountancy']);
        }
        if($collegecode == 'CSM')
        {
            $college['collegename'] = $this->faker->randomElement(['College of Science and Mathematics']);
        }
        if($collegecode == 'CED')
        {
            $college['collegename'] = $this->faker->randomElement(['College of Education']);
        }
        if($collegecode == 'CON')
        {
            $college['collegename'] = $this->faker->randomElement(['College of Nursing']);
        }

        return $college;
    }
}
