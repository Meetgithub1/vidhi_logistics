<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicDetails extends Model
{
    // use HasFactory;
    // protected $guarded = [];
    protected $fillable = [
        'employee_detail_id',
        'institute_university',
        'year_of_passing',
        'marks',
        'remarks',
        'education_image',
    ];
}
