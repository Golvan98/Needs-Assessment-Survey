<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable =['student_id', 'survey_id', 'answer', 'survey_response_id'];
    public function SurveyResponses()
    {
        return $this->hasMany(SurveyResponses::class);
    }

    public function Department()
    {
        return $this->belongsTo(Department::class);
    }
}
