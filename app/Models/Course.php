<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function subCourse()
    {
        return $this->hasMany(SubCourse::class);
    }

    public function content()
    {
        return $this->hasMany(Content::class);
    }

    public function learning()
    {
        return $this->hasMany(Learning::class);
    }
}
