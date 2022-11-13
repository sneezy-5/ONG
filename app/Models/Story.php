<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'type',
        'title',
        'description',
        'mission_name',
        'mission_date',
    ];
}
