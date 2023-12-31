<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeProfessionalInformation extends Model
{
    use HasFactory;
    protected $table = 'employee_professional_information';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
        'employees_id',
        'previous_company_name',
        'designation',
        'experience',
        'current_salary',
    ];
    public function personalInformation()
    {
        return $this->belongsTo('App\Models\EmployeePersonalInformation', 'employees_id');
    }
}
