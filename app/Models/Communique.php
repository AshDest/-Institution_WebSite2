<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communique extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'detail',
        'created_at'
    ];
}