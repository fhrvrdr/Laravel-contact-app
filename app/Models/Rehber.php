<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rehber extends Model
{
    protected $table = 'directory';

    protected $fillable = [
        'name', 'surname', 'phone', 'user_id'
    ];
}
