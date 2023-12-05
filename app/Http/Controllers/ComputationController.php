<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputationController extends Controller
{
    public function __invoke(ComputationRequest $request)
    {
        $data = $request->only(
        "employee_name", "employee_id", "department", "position",
        "company", "branch", "payroll_type", "monthly_rate", "daily_rate",
        "payroll_reference", "payroll_period", "number_of_days", "loans",
        "loan_date", "balance_amount", "gross_salary", "basic_salary", "leave",
        "rest_day", "special_holidays", "regular_holidays", "overtime", 
        "night_differential", "absent", "late", "undertime", "other_income", 
        "non_taxable_income", "total_gross_income", "sss", "hdmf", "total_gross_salary",
        "phic", "wtax", "total_mandatory_deduction", "sss_calamity_loan","net_take_home_pay",
        "days", "amount", "mandatory_deductions", "prepared_by", "received_by"
        );
    }

    public function createPDF() {
        // retreive all records from db
        $data = Computation::all();
        // share data to view
        view()->share('computation',$data);
        $pdf = PDF::loadView('pdf_view', $data);
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
      }
}
