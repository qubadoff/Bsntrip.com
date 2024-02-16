<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Authenticatable
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'name',
        'surname',
        'phone',
        'sex',
        'country',
        'city',
        'id_number',
        'id_pin_code',
        'email',
        'email_verified_at',
        'password',
    ];

    protected $casts = [];

    protected $guarded = [];
}
