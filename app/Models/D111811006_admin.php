<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class D111811006_admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'password'
    ];
}
