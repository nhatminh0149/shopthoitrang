<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dondathang extends Model
{
    public $timestamps = false; //ko muốn tạo 2 cột created_at và updated _at
    
    protected $table        = 'dondathang';
    protected $fillable     = ['ddh_ngaylap','ddh_diachigiaohang', 'ddh_trangthai', 'id', 'kh_id', 'htvc_id', 'httt_id', 'px_id'];

    protected $guarded      = ['ddh_id'];
    protected $primaryKey   = 'ddh_id';

    public function Admin(){
        return $this->belongsTo('App\Admin', 'id', 'id');
    }
    public function khachhang(){
        return $this->belongsTo('App\khachhang', 'kh_id', 'kh_id');
    }
    public function hinhthucvanchuyen(){
        return $this->belongsTo('App\hinhthucvanchuyen', 'htvc_id', 'htvc_id');
    }
    public function hinhthucthanhtoan(){
        return $this->belongsTo('App\hinhthucthanhtoan', 'httt_id', 'httt_id');
    }
    public function phuongxa(){
        return $this->belongsTo('App\phuongxa', 'px_id', 'px_id');
    }
    public function chitietdonhang(){
        return $this->hasMany('App\chitietdonhang', 'ddh_id', 'ddh_id');
    }
}
