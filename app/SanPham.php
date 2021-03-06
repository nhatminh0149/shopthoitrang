<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    public $timestamps = false; //ko muốn tạo 2 cột created_at và updated _at
    
    protected $table        = 'sanpham';
    protected $fillable     = ['sp_ten','sp_hinh', 'sp_soluong', 'sp_mota', 'sp_trangthai', 'lsp_id', 'km_id', 'kho_id'];

    protected $guarded      = ['sp_id'];
    protected $primaryKey   = 'sp_id';

    public function ngay(){
        return $this->hasMany('App\ngay', 'sp_id', 'sp_id');
    }
    public function loaisanpham(){
        return $this->belongsTo('App\loaisanpham', 'lsp_id', 'lsp_id');
    }
    public function khuyenmai(){
        return $this->belongsTo('App\khuyenmai', 'km_id', 'km_id');
    }
    public function kho(){
        return $this->belongsTo('App\kho', 'kho_id', 'kho_id');
    }
    public function hinhanh(){
        return $this->hasMany('App\hinhanh', 'sp_id', 'sp_id');
    }
    public function chitietphieunhap(){
        return $this->hasMany('App\chitietphieunhap', 'sp_id', 'sp_id');
    }
    public function chitietsanpham(){
        return $this->hasMany('App\chitietsanpham', 'sp_id', 'sp_id');
    }
    public function gia(){
        return $this->hasMany('App\gia', 'sp_id', 'sp_id');
    }
    public function danhgia(){
        return $this->hasMany('App\danhgia', 'sp_id', 'sp_id');
    }
    public function hinhanh_xoay(){
        return $this->hasMany('App\hinhanh_xoay', 'sp_id', 'sp_id');
    }
}
