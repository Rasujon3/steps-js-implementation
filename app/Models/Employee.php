<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
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
        'ssc_gpa',
        'ssc_year',
        'hsc_gpa',
        'hsc_year',
        'bsc_cgpa',
        'bsc_year',
        'msc_cgpa',
        'msc_year',
        'previous_company_name',
        'designation',
        'experience',
        'current_salary',
    ];
}
