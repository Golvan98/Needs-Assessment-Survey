<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Survey;
use App\Models\SurveyQuestion;
use App\Models\Student;
use App\Models\SurveyResponses;
use App\Models\SurveyResponseAnswers;
use App\Models\Department;
use App\Models\College;
use App\Models\Course;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {    

      $this->faker = Faker::create();
      $examplefakerofnumber = $this->faker->randomDigit();
      

      $COE = College::factory()->create([
        'id' => 1,
        'collegename' => 'College of Engineering',
        'collegecode' => 'COE'
      ]);

      $coedepartments = Department::factory(5)->create([
        
        'college_id' => $COE->id,
        'departmentname' => NULL
      ]);
      
      foreach($coedepartments as $coedepartment)
      {
        $coedepartment->update([
          'departmentname' => $this->faker->unique()->randomElement(['Mechanical Engineering', 'Electrical Engineering', 'Civil Engineering', 'Computer Engineering', 'Ceramics Engineering'])
        ]);
      }







      $courses = Course::factory(4)->create();
      $surveys = Survey::factory(4)->create();

      foreach ($surveys as $survey) 
      {
        $questions = SurveyQuestion::factory(8)->create();                     
        foreach ($questions as $question) 
        {          
          $surveyresponseanswers = SurveyResponseAnswers::factory(3)->create();
          $question->update([
            'survey_id' => $survey->id,
                           ]);               
          foreach($surveyresponseanswers as $surveyresponseanswer)
                        {
                          $surveyresponses = SurveyResponses::factory(1)->create(); 
                          $students = Student::factory(1)->create();          
                          foreach($surveyresponses as $surveyresponse)
                              {
                                $surveyresponseanswer->update([
                                  'survey_response_id' => $surveyresponse->id,
                                  'survey_question_id' => $question->id
                                                             ]);            
                                  foreach($students as $student)
                                  {
                                    
                                    $surveyresponse->update(['survey_id' => $survey->id,
                                    'student_id' => $student->id
                                                           ]);
                                  }

                              }            
                        }
        }   
      }
    
    }

       

}
 /*
        $questions = Question::factory(6)->create(); 

        
     
        $survey = Survey::create(['id' => '1', 'survey_name' => 'Survey 1 & 2', 'school_year' => '1', 'active' => '1']);
        $survey->question()->sync([1,2]);
     
*/
/*
        $surveys = Survey::factory(6)->create(); 

        $question = Question::create(['id' => '1', 'question' => 'question yada yada']);
        $question->first()->survey()->sync([1, 2]); */