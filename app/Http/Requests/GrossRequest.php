<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GrossRequest extends FormRequest
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
            "gross_Id" => ['required', 'integer'],
            "daily_rate" => ['required', 'integer'],
            "basic_salary" => ['required', 'integer'],
            "overtime" => ['required', 'integer'],
        ];
    }
}
