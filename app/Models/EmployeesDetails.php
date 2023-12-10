<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeesDetails extends Model
{
    protected $guarded = [];


    public function academicdetails()
    {
        return $this->hasMany(AcademicDetails::class, 'employee_detail_id', 'id');
    }

    public function experiencedetails()
    {
        return $this->hasMany(ExperienceDetails::class, 'employee_detail_id', 'id');
    }
    
    public function familydetails()
    {
        return $this->hasMany(FamilyDetails::class, 'employee_detail_id', 'id');
    }
    
    public function hrdetails()
    {
        return $this->hasMany(HrDetails::class, 'employee_detail_id', 'id');
    }

    public function employeetraininghistory()
    {
        return $this->hasMany(EmployeeTrainingHistory::class, 'employee_detail_id', 'id');
    }
}
