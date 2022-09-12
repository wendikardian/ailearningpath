<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mockery\Loader\EvalLoader;

class Content extends Model
{
    use HasFactory;
    public function subCourse()
    {
        return $this->belongsTo(SubCourse::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function material()
    {
        return $this->hasOne(Material::class);
    }

    public function quiz()
    {
        return $this->hasOne(Quiz::class);
    }

    public function evaluation()
    {
        return $this->hasOne(Evaluation::class);
    }

    public function detailLearning()
    {
        return $this->hasMany(DetailLearning::class);
    }
}
