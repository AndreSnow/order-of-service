<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'address';

    protected $fillable = [
        'id',
        'street',
        'zip_code',
        'country',
        'state',
        'city',
        'employment_id',
        'client_id',
    ];
}
