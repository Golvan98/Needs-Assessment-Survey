<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyResponseAnswers extends Model
{
    use HasFactory;

    public function SurveyResponses() 
    {
     return $this->belongsTo(SurveyResponses::class);
    }

    public function SurveyQuestion()
    {
        return $this->belongsTo(SurveyQuestion::class);
    }
}
