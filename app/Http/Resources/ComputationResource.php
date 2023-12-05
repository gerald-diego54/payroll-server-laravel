<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ComputationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return array(
            "employee_name" => $this->employee_name,
            "employee_id" => $this->employee_id,
            "department" => $this->department,
            "position" => $this->postion,
            "company" => $this->company,
            "branch" => $this->branch,
            "payroll_type" => $this->payroll_type,
            "monthly_rate" => $this->monthly_rate,
            "daily_rate" => $this->daily_rate,
            "payroll_reference" => $this->payroll_reference,
            "payroll_period" => $this->payroll_period,
            "number_of_days" => $this->number_of_days,
            "loans" => $this->loans,
            "loan_date" => $this->loan_date,
            "balance_amount" => $this->balance_amount,
            //2nd col
            "gross_salary" => $this->gross_salary,
            "basic_salary" => $this->basic_salary,
            "leave" => $this->leave,
            "rest_day" => $this->rest_day,
            "special_holidays" => $this->special_holidays,
            "regular_holidays" => $this->regular_holidays,
            "overtime" => $this->overtime,
            "night_differential" => $this->night_differential,
            "absent" => $this->absent,
            "late" => $this->late,
            "undertime" => $this->undertime,
            "other_income" => $this->other_income,
            "non_taxable_income" => $this->non_taxable_income,
            "total_gross_income" => $this->total_gross_income,
            //3rd col
            "sss" => $this->sss,
            "hdmf" => $this->hdmf,
            "total_gross_salary" => $this->total_gross_salary,
            "phic" => $this->phic,
            "wtax" => $this->wtax,
            "total_mandatory_deduction" => $this->total_mandatory_deduction,
            "sss_calamity_loan" => $this->sss_calamity_loan,
            "net_take_home_pay" => $this->net_take_home_pay,
            "days" => $this->days,
            "amount" => $this->amount,
            "mandatory_deductions" => $this->mandatory_deductions,
            "prepared_by" => $this->prepared_by,
            "received_by" => $this->received_by,
        );
    }
}
