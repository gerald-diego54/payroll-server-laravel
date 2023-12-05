<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('computation', function (Blueprint $table) {
            $table->string('employee_name');
            $table->integer('employee_id');
            $table->string('department');
            $table->string('position');
            $table->string('company');
            $table->string('branch');
            $table->string('payroll_type');
            $table->integer('monthly_rate');
            $table->integer('daily_rate');
            $table->string('payroll_reference');
            $table->date('payroll_period');
            $table->integer('number_of_days');
            $table->string('loans');
            $table->timestamps();
            $table->date('loan_date');
            $table->integer('balance_amount');
            $table->integer('gross_salary');
            $table->integer('basic_salary');
            $table->integer('leave');
            $table->integer('rest_day');
            $table->integer('special_holidays');
            $table->integer('regular_holidays');
            $table->integer('overtime');
            $table->integer('night_differential');
            $table->integer('absent');
            $table->integer('late');
            $table->integer('undertime');
            $table->integer('other_income');
            $table->integer('non_taxable_income');
            $table->integer('total_gross_income');
            $table->integer('sss');
            $table->integer('hdmf');
            $table->integer('total_gross_salary');
            $table->integer('phic');
            $table->integer('wtax');
            $table->integer('total_mandatory_deduction');
            $table->integer('sss_calamity_loan');
            $table->integer('net_take_home_pay');
            $table->integer('days');
            $table->integer('amount');
            $table->integer('mandatory_deductions');
            $table->string('prepared_by');
            $table->string('received_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computation');
    }
};
