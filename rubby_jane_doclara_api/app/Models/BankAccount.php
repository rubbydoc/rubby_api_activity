<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone_number',
        'bank_name',
        'bank_account_number',
        'bank_account_type',
        'email',
        
    ];
}
