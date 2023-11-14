<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OvertimeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "overtime_application_number" => ['required', 'min:10'],
            "overtime_date" => ['date'],
            "overtime_hours" => ['integer'],
            "approved" => ['boolean'],
            "convert_to_offset_credits" => ['boolean'],
            "cutoff_remarks" => ['string'],
            "remarks" => ['string'],
            "timestaps" => ['string']
        ];
    }
}
