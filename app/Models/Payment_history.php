<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_history extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'payment_id';
    protected $fillable = [
        'user_id',
        'price',
        'payment_info',
        'payment_time'
    ];
}
