<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

       protected $fillable = [
       'title',
       'answers',
       'right_answer',
       'score',
       ];

    public function quiz() {
        return $this->belongsTo(Quiz::class);
    }
}
