<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room_detail extends Model
{
    use HasFactory;
    protected $primaryKey = 'rd_id';
    protected $fillable = [
        'rentRoom_id',
        'prices',
        'acreage',
        'bath_room',
        'bed_room',
        'time'
    ];
}
