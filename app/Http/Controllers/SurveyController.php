<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
use App\Models\SurveyQuestion;
use App\Models\SurveyResponseAnswer;
use App\Models\SurveyResponses;
use App\Models\Student;
class SurveyController extends Controller
{
    public function showsurvey(Survey $surveys)
    {
        

        $surveys = survey::where('id', $surveys->id)->get();     

      
        return view('/surveyholder')->with(['surveys' => $surveys]);
    }

    public function listsurvey(Survey $surveys)
    {

        $surveys = survey::all();

        return view('/surveylist')->with(['surveys' =>$surveys]);
    }
    


    public function viewsurveys(Survey $surveys)

    {
        $surveys = Survey::all();

        return view('viewsurveys')->with(['surveys' => $surveys]);
    }




    public function surveyresults(SurveyQuestion $surveyquestion)
    {
        $surveyquestioncategories = SurveyQuestion::query()->distinct()->pluck('category');

        return view('/surveyresults')->with(['surveyquestion' => $surveyquestion, 'surveyquestioncategories' => $surveyquestioncategories]);
    }

    public function surveydata($surveyquestioncategory)
    {

        

        return view('/surveydata')->with(['surveyquestioncategory' => $surveyquestioncategory]);
    }
}
