<?php

namespace App\Models;

use App\Models\EmployeeEducationalQualification;
use App\Models\EmployeeProfessionalInformation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeePersonalInformation extends Model
{
    use HasFactory;
    protected $table = 'employee_personal_information';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'age',
        'mobile',
        'nid',
        'address',
        'gender',

    ];

    public function educationalQualifications()
    {
        return $this->hasOne(EmployeeEducationalQualification::class, 'emp_id', 'id');
    }
    public function educationalQualification()
    {
        return $this->hasMany(EmployeeEducationalQualification::class, 'emp_id', 'id');
    }
    public function professionalInformation()
    {
        return $this->hasOne(EmployeeProfessionalInformation::class, 'employees_id', 'id');
    }
}
