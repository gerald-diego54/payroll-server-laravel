<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrossModel extends Model
{
    use HasFactory;
    protected $table = 'gross';

    protected $primaryKey = "gross_id";
    protected $fillable = [
        "daily_rate",
        "basic_salary",
        "overtime",
    ];
}
