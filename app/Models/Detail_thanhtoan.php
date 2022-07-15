<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_thanhtoan extends Model
{
    protected $table = "detail_thanhtoan";

    public function product(){
        return $this->belongsTo('App\Models\Hotel','id_hotel','id_detailpays');
    }

    public function thanhtoan(){
        return $this->belongsTo('App\Models\Thanhtoan','id_thanhtoan','id_thanhtoan');
    }
}
