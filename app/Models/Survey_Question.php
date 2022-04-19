<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey_Question extends Model
{
    use HasFactory;
    public function Survey ()
    {
        return $this->BelongsTo(Survey::class);
    }

    public function Survey_Response_Answers()
    {
        return $this->hasMany(Survey_Response_Answers::class);
    }
}
