<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicTemplate extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'class',
        'doc_name',
        'route_name',
    ];
}
