<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phieunhapkho extends Model
{
    public    $timestamps   = false;

    protected $table        = 'phieunhapkho';
    protected $fillable     = ['id', 'kho_id','ncc_id','pnk_ngaynhapkho'];
    protected $guarded      = ['pnk_id'];
    protected $primaryKey   = 'pnk_id';
 
    protected $dates        = ['pnk_ngaynhapkho'];
    protected $dateFormat   = 'Y-m-d';

    public function kho(){
        return $this->belongsTo('App\kho', 'kho_id', 'kho_id');
    }
    public function Admin(){
        return $this->belongsTo('App\Admin', 'id', 'id');
    }
    public function nhacungcap(){
        return $this->belongsTo('App\nhacungcap', 'ncc_id', 'ncc_id');
    }
    public function chitietphieunhap(){
        return $this->hasMany('App\chitietphieunhap', 'pnk_id', 'pnk_id');
    }
}
