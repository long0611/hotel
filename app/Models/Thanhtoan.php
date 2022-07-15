<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thanhtoan extends Model
{
    protected $table = "thanhtoan";

    public function bill_thanhtoan(){
        return $this->hasMany('App\Models\Detail_thanhtoan','id_thanhtoan','id_thanhtoan');
    }

    public function thanhtoan(){
        return $this->hasMany('App\Models\Customer','id_customer','id_customer');
    }
}
