<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducationalInfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'ssc_gpa' => 'required|decimal:0,2',
            'ssc_year' => 'required|numeric',
            'hsc_gpa' => 'required|decimal:0,2',
            'hsc_year' => 'required|numeric',
            'bsc_cgpa' => 'required|decimal:0,2',
            'bsc_year' => 'required|numeric',
            'msc_cgpa' => 'nullable|decimal:0,2',
            'msc_year' => 'nullable|numeric',
        ];
    }
}
