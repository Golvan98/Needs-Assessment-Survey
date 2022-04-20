<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey_Responses extends Model
{
    use HasFactory;


    public function Student()
    {
        return $this->belongsTo(Student::class);
    }

    public function Survey()
    {
        return $this->belongsTo(Survey::class);
    }
    public function SurveyResponseAnswers()
    {
        return $this->hasMany(SurveyResponseAnswers::class);
    }
    
}
