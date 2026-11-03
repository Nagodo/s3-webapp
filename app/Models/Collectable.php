<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collectable extends Model
{
    protected $fillable = ['name', 'amount'];

    protected $attributes = [
        'amount' => 0
    ];
}
