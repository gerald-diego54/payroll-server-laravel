<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxModel extends Model
{
    use HasFactory;
    protected $table = 'tax';

    protected $fillable = [
        "tax_id",
        "sss",
        "pag_ibig",
        "phil_health",
    ];
}