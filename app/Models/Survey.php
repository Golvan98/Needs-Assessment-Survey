<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{

    public $table = 'surveys';
    use HasFactory;

    public function SurveyQuestion ()
    {
        return $this->hasMany(SurveyQuestion::class);
    }

    public function SurveyResponses()
    {
        return $this->hasMany(SurveyResponses::class);
    }
}
