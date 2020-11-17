<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chitietdonhang extends Model
{
    public    $timestamps   = false;

    protected $table        = 'chitietdonhang';
    protected $fillable     = ['ddh_id', 'sp_id', 'size_id', 'm_id','ctdh_soluong', 'ctdh_dongia'];
    //protected $guarded      = ['pnk_id', 'sp_id', 'm_id', 'size_id'];

    //protected $primaryKey   = ['ddh_id', 'sp_id', 'size_id', 'm_id'];
   

    public function sanpham(){
        return $this->belongsTo('App\sanpham', 'sp_id', 'sp_id');
    }
    public function dondathang(){
        return $this->belongsTo('App\dondathang', 'ddh_id', 'ddh_id');
    }
    public function mau(){
        return $this->belongsTo('App\mau', 'm_id', 'm_id');
    }
    public function size(){
        return $this->belongsTo('App\size', 'size_id', 'size_id');
    }
}
