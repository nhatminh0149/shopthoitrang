<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chitietsanpham extends Model
{
    public    $timestamps   = false;

    protected $table        = 'chitietsanpham';
    protected $fillable     = ['sp_id', 'ha_id','m_id', 'size_id','ctsp_soluong'];
 

    public function sanpham(){
        return $this->belongsTo('App\sanpham', 'sp_id', 'sp_id');
    }
    public function hinhanh(){
        return $this->belongsTo('App\hinhanh', 'ha_id', 'ha_id');
    }
    public function mau(){
        return $this->belongsTo('App\mau', 'm_id', 'm_id');
    }
    public function size(){
        return $this->belongsTo('App\size', 'size_id', 'size_id');
    }
}
