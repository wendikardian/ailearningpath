<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    public function content()
    {
        return $this->belongsTo(Content::class);
    }

    public function question()
    {
        return $this->hasMany(Question::class);
    }

    public function quizTaken()
    {
        return $this->hasMany(QuizTaken::class);
    }
}
