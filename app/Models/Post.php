<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'short_text',
        'users',
        'expire_at',
        'phone_number',
        'created_at'
    ];

}
