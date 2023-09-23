<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestedNumber extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email',
        'user_id',
        'customer_phone',
        'phone_number',
        'area_code',
        'plan',
        'address',
        'status',
    ];
}
