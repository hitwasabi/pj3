<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent_room extends Model
{
    use HasFactory;
    protected $primaryKey = 'rr_id';
    protected $fillable = [
        'room_name',
        'owner_id',
        'cate_id',
        'rent_amountId',
        'city_id',
        'city_detailId',
        'street_id',
        'info_detail',
        'status',
        'room_date',
        'status',
        'interact'
    ];
    public function category() {
        return $this->belongsTo(Category::class,'cate_id', 'cate_id');
    }

    public function increaseCount(){
        $this->interact++;
        return $this->save();
    }
}
