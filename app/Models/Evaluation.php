<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    public function content()
    {
        return $this->belongsTo(Content::class);
    }
    public function rubrik()
    {
        return $this->hasMany(Rubrik::class);
    }

    public function evalationTaken()
    {
        return $this->hasMany(EvaluationTaken::class);
    }
}
