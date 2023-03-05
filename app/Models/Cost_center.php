<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost_center extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'name',
        'start_date',
        'end_date',
        'state',
        'amount'
    ];
}
