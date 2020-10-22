<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chitietphieunhap extends Model
{
    public    $timestamps   = false;

    protected $table        = 'chitietphieunhap';
    protected $fillable     = ['pnk_id', 'sp_id', 'm_id', 'size_id','ctpn_soluong', 'ctpn_gianhap'];
    //protected $guarded      = ['pnk_id', 'sp_id', 'm_id', 'size_id'];

    protected $primaryKey   = ['pnk_id', 'sp_id', 'm_id', 'size_id'];
   

    public function sanpham(){
        return $this->belongsTo('App\sanpham', 'sp_id', 'sp_id');
    }
    public function phieunhapkho(){
        return $this->belongsTo('App\phieunhapkho', 'pnk_id', 'pnk_id');
    }
    public function mau(){
        return $this->belongsTo('App\mau', 'm_id', 'm_id');
    }
    public function size(){
        return $this->belongsTo('App\size', 'size_id', 'size_id');
    }
}
