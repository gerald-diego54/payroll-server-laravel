<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DTRModel extends Model
{
    use HasFactory;

    protected $table = "dtr";
    protected $primaryKey = "dtr_id";
    protected $fillable = [
        "user_id",
        "dtr_user_date",
        "time_in",
        "time_out",
        "remarks"
    ];
}
