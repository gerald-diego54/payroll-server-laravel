<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computation extends Model
{
    use HasFactory;
    protected $table = 'computation';

    protected $fillable = [
        'employee_name',
        'employee_id',
        'department',
        'position',
        'company',
        'branch',
        'payroll_type',
        'monthly_rate',
        'daily_rate',
        'payroll_reference',
        'payroll_period',
        'number_of_days',
        'loans',
        'loan_date',
        'balance_amount',
        //2nd col
        'gross_salary',
        'basic_salary',
        'leave',
        'rest_day',
        'special_holidays',
        'regular_holidays',
        'overtime',
        'night_differential',
        'absent',
        'late',
        'undertime',
        'other_income',
        'non_taxable_income',
        'total_gross_income',
        //3rd col
        'sss',
        'hdmf',
        'total_gross_salary',
        'phic',
        'wtax',
        'total_mandatory_deduction',
        'sss_calamity_loan',
        'net_take_home_pay',
        'days',
        'amount',
        'mandatory_deductions',
        'prepared_by',
        'received_by',
    ];
}
