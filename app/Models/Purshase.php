<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purshase extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'quantity',
        'bill_id',
        'bills',
        'state'
    ];
}
