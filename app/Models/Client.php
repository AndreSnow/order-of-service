<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'client';

    protected $fillable = [
        'id',
        'name',
        'last_name',
        'phone',
        'cpf',
        'email',
        'date_birth',
        'address_id',
        'product_id',
        'service_id',
    ];
}
