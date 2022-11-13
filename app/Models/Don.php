<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Don extends Model
{
    use HasFactory;
    
    protected $fillable = 
    [
        'last_name',
        'first_name',
        'email' ,
        'country',
        'city',
        'address',
        'amount',
    ];
}
