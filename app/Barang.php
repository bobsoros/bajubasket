<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function pesanan_detail()
     {
        return $this->hasMany('App\Pesanan_Detail','barang_id','id');
    }
}
