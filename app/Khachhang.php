<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khachhang extends Model
{
    public $timestamps = false; //ko muốn tạo 2 cột created_at và updated _at
    
    protected $table        = 'khachhang';
    protected $fillable     = ['kh_taikhoan', 'kh_matkhau', 'kh_hoten', 'kh_email', 'kh_sdt', 'kh_trangthai'];

    protected $guarded      = ['kh_id'];
    protected $primaryKey   = 'kh_id';

    public function danhgia(){
        return $this->hasMany('App\danhgia', 'kh_id', 'kh_id');
    }
    public function dondonhang(){
        return $this->hasMany('App\dondonhang', 'kh_id', 'kh_id');
    }
}
