<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renter extends Model
{
    use HasFactory;

    protected $hidden = [
        'updated_at',
        'created_at',
        'password'
    ];

    protected $fillable = [
        'name',
        'email',
        'password',
        'divelevel'
    ];
}
