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
        
                if ($coedepartment->departmentname =='Mechanical Engineering')
                {
                  Course::factory()->create([
                    'department_id' => $coedepartment->id,
                    'coursename' => $this->faker->randomElement(['Bachelor of Science in Mechanical Engineering']),
                    'coursecode' => $this->faker->randomElement(['BSME'])
                  ]);
                }

                if($coedepartment->departmentname =='Electrical Engineering')
                {
                  Course::factory()->create([
                    'department_id' => $coedepartment->id,
                    'coursename' => $this->faker->randomElement(['Bachelor of Science in Electrical Engineering']),
                    'coursecode' => $this->faker->randomElement(['BSEE'])
                  ]);
                }

                if($coedepartment->departmentname == 'Civil Engineering')
                {
                  Course::factory()->create([
                    'department_id' => $coedepartment->id,
                    'coursename' => $this->faker->randomElement(['Bachelor of Science in Civil Engineering']),
                    'coursecode' => $this->faker->randomElement(['BSCE'])
                  ]);
                }
      }

      $CCS = College::factory()->create([
        'id' => 2,
        'collegename' => 'College of Computer Science',
        'collegecode' => 'CCS'
      ]);

      $ccsdepartments = Department::factory(4)->create([
        'college_id' => $CCS->id,
        'departmentname' => NULL
      ]);
      


      foreach($ccsdepartments as $ccsdepartment)
      {
        $ccsdepartment->update([
          'departmentname' => $this->faker->unique()->randomElement(['Computer Science', 'Information Technology', 'Information Systems', 'Computer Application'])
        ]);
      }

      $CASS = College::factory()->create([
        'id' => 3,
        'collegename' => 'College of Social Arts and Sciences',
        'collegecode' => 'CASS'
      ]);

      $cassdepartments = Department::factory(7)->create([
        'college_id' => $CASS->id,
        'departmentname' => NULL
      ]);

      foreach($cassdepartments as $cassdepartment)
      {
        $cassdepartment->update([
          'departmentname' =>$this->faker->unique()->randomElement(['English', 'Filipino', 'Social Science', 'Psychology', 'History', 'Political Science', 'Philosophy'])
        ]);
      }

      $CBAA = College::factory()->create([
        'id' => 4,
        'collegename' => 'College of Economics, Business and Administration',
        'collegecode' => 'CBAA'
      ]);

      $cbaadepartments = Department::factory(6)->create([
        'college_id' => $CBAA->id,
        'departmentname' => NULL
      ]);

      foreach($cbaadepartments as $cbaadepartment)
      {
        $cbaadepartment->update([
          'departmentname' => $this->faker->unique()->randomElement(['Economics', 'Accountancy', 'Hospitality Management', 'Entrepreneurship', 'Business Economics', 'Marketing Management'])
        ]);
      }

      $CED = College::factory()->create([
        'id' => 5,
        'collegename' => 'College of Education',
        'collegecode' => 'CED'
      ]);

      $ceddepartments = Department::factory(4)->create([
        'college_id' => $CED->id,
        'departmentname' => NULL
      ]);

      foreach($ceddepartments as $ceddepartment)
      {
        $ceddepartment->update([
          'departmentname' => $this->faker->unique()->randomElement(['Science and Mathematics Education', 'Professional Education', 'Physical Education', 'Technology Teacher Education'])
        ]);
      }

      $CSM = College::factory()->create([
        'id' => 6,
        'collegename' => 'College of Science and Mathematics',
        'collegecode' => 'CSM'
      ]);

      $csmdepartments = Department::factory(4)->create([
        'college_id' => $CSM->id,
        'departmentname' => NULL
      ]);

      foreach($csmdepartments as $csmdepartment)
      {
        $csmdepartment->update([
          'departmentname' => $this->faker->unique()->randomElement(['Biological Science', 'Chemistry', 'Mathematics and Statistics', 'Physics'])
        ]);
      }

      $CON = College::factory()->create([
        'id' => 7,
        'collegename' => 'College of Nursing',
        'collegecode' => 'CON'
      ]);

      $condepartments = department::factory(1)->create([
        'college_id' => $CON->id,
        'departmentname' => NULL
      ]);

      foreach($condepartments as $condepartment)
      {
        $condepartment->update([
          'departmentname' => $this->faker->unique()->randomElement(['Nursing'])
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