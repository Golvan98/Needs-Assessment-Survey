<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyQuestion extends Model
{
    use HasFactory;
    public function Survey ()
    {
        return $this->belongsTo(Survey::class);
    }

    public function SurveyResponseAnswers()
    {
        return $this->hasMany(SurveyResponseAnswers::class);
    }
}
