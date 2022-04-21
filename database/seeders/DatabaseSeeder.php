<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Survey;
use App\Models\SurveyQuestion;
use App\Models\Student;
use App\Models\SurveyResponses;
use App\Models\SurveyResponseAnswers;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
      $surveys = Survey::factory(2)->create();
     
     

      foreach ($surveys as $survey) 
      {
        $questions = SurveyQuestion::factory(2)->create();
       
        
        foreach ($questions as $question) 
        {
          
          $surveyresponseanswers = SurveyResponseAnswers::factory(2)->create();
          $question->update([
            'survey_id' => $survey->id,
          ]);

              foreach($surveyresponseanswers as $surveyresponseanswer)
              {
                
                $surveyresponses = SurveyResponses::factory(2)->create(); 
                
                foreach($surveyresponses as $surveyresponse)
                {
                  $students = Student::factory(1)->create();
                  $surveyresponseanswer->update([
                    'survey_question_id' => $question->id,
                    'survey_response_id' => $surveyresponse->id,
                ]); 
                 
                  foreach($students as $student)
                  {
                  $surveyresponse->update([
                    'student_id' => $student->id,
                    'survey_id' => $survey->id
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

       