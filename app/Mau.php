<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mau extends Model
{
    public $timestamps = false; //ko muốn tạo 2 cột created_at và updated _at
    
    protected $table        = 'mau';
    protected $fillable     = ['m_ten'];

    protected $guarded      = ['m_id'];
    protected $primaryKey   = 'm_id';

    public function mau_sanpham(){
        return $this->hasMany('App\mau_sanpham', 'm_id', 'm_id');
    }
    public function chitietdonhang(){
        return $this->hasMany('App\chitietdonhang', 'm_id', 'm_id');
    }
}
