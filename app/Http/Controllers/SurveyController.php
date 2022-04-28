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


    public function surveycategory($survey)
    {

        $specificsurveyid = Survey::where('name', $survey)->pluck('id');

        

        $questioncategories = SurveyQuestion::where('survey_id', $specificsurveyid)->pluck('category')->unique();

        

        return view('surveycategory')->with(['survey' => $survey, 'questioncategories' => $questioncategories]);
    }

    public function viewsurveyresult($questioncategory)
    {
        return view('viewsurveyresult')->with(['questioncategory' => $questioncategory]);
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
