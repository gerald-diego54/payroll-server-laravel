<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaxRequest extends FormRequest
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
            "tax_id" => ['required', 'integer'],
            "sss" => ['required', 'integer'],
            "pag-ibig" => ['required', 'integer'],
            "philhealth" => ['required', 'integer'],
        ];
    }
}
