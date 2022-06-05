<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorContractDesigner extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'number',
        'date',
        'customer',
        'customer_repr',
        'designer',
        'images',
        'territory',
        'time',
        'reward',
        'contract_days',
        'customer_address',
        'customer_tel',
        'customer_pay',
        'designer_address',
        'designer_passport',
        'designer_phone',
        'tax_data',
    ];
}
