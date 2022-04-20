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

    public function surveyresults()
    {
        return view('/surveyresults');

    }

    public function surveydata()
    {
        return view('/surveydata');
    }
}
