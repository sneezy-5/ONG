<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'last_name',
        'first_name',
        'email',
        'country',
        'city',
        'address',
        'phone',
        'civility',
        'postal_code',
        'paye'
    ];
}
