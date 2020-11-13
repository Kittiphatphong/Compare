<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataUnitel extends Model
{
    protected $fillable = [
        'tel', 'amount', 'date',
    ];
}
