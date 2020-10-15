<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
    public $timestamps = false; //ko muốn tạo 2 cột created_at và updated _at
    
    protected $table        = 'khuyenmai';
    protected $fillable     = ['km_ten','km_mota', 'km_giatriphantram', 'km_ngaytao', 'km_ngayapdung', 'km_ngayketthuc'];

    protected $guarded      = ['km_id'];
    protected $primaryKey   = 'km_id';

    protected $dates        = ['km_ngaytao', 'km_ngayapdung', 'km_ngayketthuc'];
    protected $dateFormat   = 'Y-m-d H:i:s';

    public function sanpham(){
        return $this->hasMany('App\sanpham', 'km_id', 'km_id');
    }
}
