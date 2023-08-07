<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeEducationalQualification extends Model
{
    use HasFactory;
    protected $table = 'employee_educational_qualifications';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
        'emp_id',
        'ssc_gpa',
        'ssc_year',
        'hsc_gpa',
        'hsc_year',
        'bsc_cgpa',
        'bsc_year',
        'msc_cgpa',
        'msc_year',

    ];
    public function personalInformation()
    {
        return $this->belongsTo('App\Models\EmployeePersonalInformation', 'emp_id');
    }
}
