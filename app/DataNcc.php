<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataNcc extends Model
{
    protected $fillable = [
        'tel', 'amount', 'date',
    ];
}
