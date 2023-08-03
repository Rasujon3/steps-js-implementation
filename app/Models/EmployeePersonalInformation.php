<?php

namespace App\Models;

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
}
