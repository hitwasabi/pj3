<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $primaryKey = 'image_id';
    protected $fillable = [
        'rentRoom_id',
        'url',
        'url_1',
        'url_2'
    ];
}
