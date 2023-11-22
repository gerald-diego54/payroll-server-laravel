<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overtime extends Model
{
    public $table = 'overtime_application';
    use HasFactory;

    protected $fillable = [
        'user_id',
        'overtime_application_number',
        'overtime_date',
        'password',
        'overtime_hours',
        'approved',
        'convert_to_offset_credits',
        'cutoff_remarks',
        'remarks',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];
}
