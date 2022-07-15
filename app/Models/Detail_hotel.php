<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_hotel extends Model
{
    protected $table = "detail_hotel";

    public function product(){
        return $this->hasMany('App\Models\Hotel','id_room','id_room');
    }
}
