<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeaveModel extends Model
{
    public $table = 'leave';
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'leave_application_number',
        'date',
        'cutoff_remarks',
        'leave_type',
        'half_day',
        'with_pay',
        'approve',
        'remarks',
    ];
}
