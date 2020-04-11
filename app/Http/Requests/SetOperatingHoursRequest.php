<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SetOperatingHoursRequest extends FormRequest
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
            '1-open' => 'nullable|date_format:H:i|required_with:1-close',
            '1-close' => 'nullable|date_format:H:i|required_with:1-open',
            '2-open' => 'nullable|date_format:H:i|required_with:2-close',
            '2-close' => 'nullable|date_format:H:i|required_with:2-open',
            '3-open' => 'nullable|date_format:H:i|required_with:3-close',
            '3-close' => 'nullable|date_format:H:i|required_with:3-open',
            '4-open' => 'nullable|date_format:H:i|required_with:4-close',
            '4-close' => 'nullable|date_format:H:i|required_with:4-open',
            '5-open' => 'nullable|date_format:H:i|required_with:5-close',
            '5-close' => 'nullable|date_format:H:i|required_with:5-open',
            '6-open' => 'nullable|date_format:H:i|required_with:6-close',
            '6-close' => 'nullable|date_format:H:i|required_with:6-open',
            '7-open' => 'nullable|date_format:H:i|required_with:7-close',
            '7-close' => 'nullable|date_format:H:i|required_with:7-open'
        ];
    }
}
