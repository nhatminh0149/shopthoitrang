<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Danhgia extends Model
{
    public $timestamps = false; //ko muốn tạo 2 cột created_at và updated _at
    
    protected $table        = 'danhgia';
    protected $fillable     = ['dg_noidung','dg_ngaydanhgia','sp_id', 'kh_id','dg_trangthai', 'dg_parent_comment'];

    protected $guarded      = ['dg_id'];
    protected $primaryKey   = 'dg_id';

    public function sanpham(){
        return $this->belongsTo('App\sanpham', 'sp_id', 'sp_id');
    }
    public function khachhang(){
        return $this->belongsTo('App\khachhang', 'kh_id', 'kh_id');
    }
}
