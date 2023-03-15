<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'service';

    protected $fillable = [
        'id',
        'name',
        'date_init',
        'date_finish',
        'coust',
        'image',
        'description',
        'employment_id',
        'status_id',
    ];
}
