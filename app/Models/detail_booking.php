<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_booking extends Model
{
    use HasFactory; 
    protected $primaryKey = 'booking_id';
    protected $table = "detail_bookings";

    public function booking(){
        return $this->belongsTo('App\Models\Hotel', 'booking_id', 'id_hotel');
    }
    public function booking1(){
        return $this->belongsTo('App\Models\Customer','id_customer','id_customer');
    }
    
}
