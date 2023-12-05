<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Nette\Utils\Strings;

class ComputationRequest extends FormRequest
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
            // 1st col
            "employee_name" => ['required', 'strings'],
            "employee_id" => ['required', 'integer'],
            "department" => ['required', 'string'],
            "position" => ['required', 'string'],
            "company" => ['required', 'string'],
            "branch" => ['required', 'string'],
            "payroll_type" => ['required', 'string'],
            "monthly_rate" => ['required', 'integer'],
            "daily_rate" => ['required', 'integer'],

            // "payroll_reference" => [], Place holder?

            "payroll_period" => ['required', 'date'],
            "number_of_days" => ['required', 'date'],

            // "loans" => [], Place holder?

            "loan_date" => ['required', 'date'],
            "balance_amount" => ['required', 'integer'],

            //2nd col
            // "gross_salary" => [],

            "basic_salary" => ['required', 'integer'],
            "leave" => ['required', 'integer'],
            "rest_day" => ['nullable', 'integer'],
            "special_holidays" => ['nullable', 'integer'],
            "regular_holidays" => ['nullable', 'integer'],
            "overtime" => ['nullable', 'integer'],
            "night_differential" => ['nullable', 'integer'],
            "absent" => ['nullable', 'integer'],
            "late" => ['nullable', 'integer'],
            "undertime" => ['nullable', 'integer'],

            // "other_income" => [], Place holder?

            "non_taxable_income" => ['nullable', 'integer'],
            "total_gross_income" => ['required', 'integer'],

            // 3rd col can be nullable or required?
            "sss" => ['nullable', 'integer'],
            "hdmf" => ['nullable', 'integer'],
            "total_gross_salary" => ['required', 'integer'],
            "phic" => ['nullable', 'integer'],
            "wtax" => ['required', 'integer'],
            "total_mandatory_deduction" => ['required', 'integer'],
            "sss_calamity_loan" => ['required', 'integer'],
            "net_take_home_pay" => ['required', 'integer'],
            "days" => ['required'],
            "amount" => ['required', 'integer'],
            "mandatory_deductions" => ['nullable', 'integer'],
            "prepared_by" => ['required', 'string'],
            "received_by" => ['required', 'string'],




        ];
    }
}