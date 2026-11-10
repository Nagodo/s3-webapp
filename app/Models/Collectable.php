<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collectable extends Model {
    
    protected $fillable = ['name', 'amount']; // Allow mass assignment for 'name' and 'amount' attributes

    protected $attributes = [ // Default values for attributes
        'amount' => 0
    ];
}
