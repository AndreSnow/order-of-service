<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    use HasFactory;

    protected $table = 'employments';

    protected $fillable = [
        'id',
        'name',
        'last_name',
        'phone',
        'cpf',
        'email',
        'date_birth',
        'specialist',
        'hiring_date',
        'address_id',
    ];
}
