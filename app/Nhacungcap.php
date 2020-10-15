<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nhacungcap extends Model
{
    public $timestamps = false; //ko muốn tạo 2 cột created_at và updated _at
    
    protected $table        = 'nhacungcap';
    protected $fillable     = ['ncc_ten','ncc_diachi', 'ncc_sdt', 'ncc_trangthai'];

    protected $guarded      = ['ncc_id'];
    protected $primaryKey   = 'ncc_id';

    public function danhmuc(){
        return $this->hasMany('App\danhmuc', 'ncc_id', 'ncc_id');
    }
    public function phieunhapkho(){
        return $this->hasMany('App\phieunhapkho', 'kho_id', 'kho_id');
    }
}
