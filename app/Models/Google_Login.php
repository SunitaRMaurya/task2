<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Google_Login extends Model
{
    use HasFactory;

    protected $table = 'google'
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
