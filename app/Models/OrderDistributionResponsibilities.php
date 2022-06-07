<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDistributionResponsibilities extends BasicTemplate
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'OKUD',
        'order_number',
        'order_date',
        'reason',
        'responsibility1',
        'responsibility2',
        'responsibility3',
    ];
}
