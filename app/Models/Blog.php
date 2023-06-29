<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'new_id';
    protected $fillable = [
        'info',
        'userPost_id',
        'new_image',
        'new_name',
        'post_date'
    ];
}
