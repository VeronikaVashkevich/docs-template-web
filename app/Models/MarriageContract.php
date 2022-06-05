<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarriageContract extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'date',
        'husband',
        'wife',
        'husband_name',
        'husband_flat',
        'husband_flat_address',
        'husband_car_model',
        'husband_car_engine_number',
        'husband_car_engine_body',
        'husband_car_register',
        'husband_garage',
        'wife_name',
        'wife_property_1',
        'wife_property_2',
        'wife_property_3',
        'wife_property_4',
        'sum',
        'husband_passport_series',
        'husband_passport_number',
        'husband_issued',
        'husband_issued_address',
        'wife_passport_series',
        'wife_passport_number',
        'wife_issued',
        'wife_issued_address',
    ];
}
