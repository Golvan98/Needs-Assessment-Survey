<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey_Response_Answers extends Model
{
    use HasFactory;

    public function Survey_Responses() 
    {
     return $this->belongsTo(Survey_Responses::class);
    }

    public function Survey_Question()
    {
        return $this->belongsTo(Survey_Question::class);
    }
}
