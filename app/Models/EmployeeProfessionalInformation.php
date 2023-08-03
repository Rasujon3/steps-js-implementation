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
        'previous_company_name',
        'designation',
        'experience',
        'current_salary',
    ];
}
