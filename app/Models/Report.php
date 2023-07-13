<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $primaryKey = 'rp_id';
    protected $fillable = [
        'userReport_id ',
        'rpRoom_id ',
        'report_info',
        'report_date'
    ];
}
