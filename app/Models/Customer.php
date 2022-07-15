<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;


class Customer extends Model implements AuthenticatableContract
{
    use AuthenticableTrait;
    use HasFactory;
    protected $primaryKey = 'id_customer';    
    protected $table = "customer";

    public function thanhtoan(){
        return $this->hasMany('App\Models\Thanhtoan','id_customer','id_customer');
    }
    public function thanhtoan1(){
        return $this->hasMany('App\Models\detail_booking','id_customer','id_customer');
    }
}
