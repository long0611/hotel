<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $primaryKey = 'id_hotel';
    protected $table = "hotel";
    protected $fillable = [
        'status', 
    ];

    public function product_type(){
        return $this->belongsTo('App\Models\Detail_hotel','id_room','id_hotel');
    }
    
    public function detail_thanhtoan(){
        return $this->hasMany('App\Models\Detail_thanhtoan','id_hotel','id_detailpays');
    }
    public function booking(){
        return $this->hasMany('App\Models\detail_booking','id_hotel','id_hotel');
    }
}
