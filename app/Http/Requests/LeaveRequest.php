<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeaveRequest extends FormRequest
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
            "leave_id" => ['required', 'integer'],
            "user_id" => ['required', 'integer'],
            "date" => ['required', 'date'],
            "cutoff_remarks" => ['required', 'string'],
            "leave_type" => ['required', 'string'],
            "half_day" => ['required', 'boolean'],
            "with_pay" => ['required', 'boolean'],
            "approve" => ['required', 'boolean'],
            "remarks" => ['required', 'string'],
        ];
    }
}
