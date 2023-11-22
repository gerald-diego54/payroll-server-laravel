<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeaveModel extends Model
{

    use HasFactory, SoftDeletes;
    public $table = 'leave';
    protected $fillable = [
        'leave_id',
        'user_id',
        'date',
        'cutoff_remarks',
        'leave_type',
        'half_day',
        'with_pay',
        'approve',
        'remarks',
    ];
}