<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfessionalInfoRequest extends FormRequest
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
            'previous_company_name' => 'required|string',
            'designation' => 'required|string',
            'experience' => 'required|string',
            'current_salary' => 'required|string',
        ];
    }
}
