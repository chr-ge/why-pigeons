<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DriversLicenseRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'license_number' => 'required|alpha_dash|size:15',
            'reference_number' => 'required|alpha_num|size:9',
            'dob' => 'required|date|before:21 years ago',
            'valid_on' => 'required|date|before:today',
            'expires_on' => 'required|date|after:today'
        ];
    }
}
