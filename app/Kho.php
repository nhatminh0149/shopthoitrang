<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kho extends Model
{
    public $timestamps = false; //ko muốn tạo 2 cột created_at và updated _at
    
    protected $table        = 'kho';
    protected $fillable     = ['kho_ten','kho_diachi'];

    protected $guarded      = ['kho_id'];
    protected $primaryKey   = 'kho_id';

    public function sanpham(){
        return $this->hasMany('App\sanpham', 'kho_id', 'kho_id');
    }
    public function phieunhapkho(){
        return $this->hasMany('App\phieunhapkho', 'kho_id', 'kho_id');
    }
}
