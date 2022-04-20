<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Survey;
use App\Models\SurveyQuestion;
use App\Models\Student;
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
    
      $surveys = Survey::factory(5)->create();

      foreach ($surveys as $survey) {
        $questions = SurveyQuestion::factory(10)->create();
        
        foreach ($questions as $question) {
          $question->update([
            'survey_id' => $survey->id,
          ]);
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

       