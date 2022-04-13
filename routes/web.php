<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('originlayout');
});

Route::get('/home', function(){
    return view('/homepage');
});

Route::get('/survey/{surveys}', [SurveyController::class, 'showsurvey']);

Route::get('/surveylist', [SurveyController::class, 'listsurvey']);

Route::get('/surveyresults', [SurveyController::class, 'surveyresults']);

Route::get('/surveydata', [SurveyController::class, 'surveydata']);

/*
public function showsurvey(Survey $surveys, Question $questions)
    {
        

        $surveys = survey::where('id', $surveys->id)->get();     

      
        return view('/surveyholder')->with(['surveys' => $surveys]);
    }

    public function listsurvey(Survey $surveys, Question $questions)
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
} */
