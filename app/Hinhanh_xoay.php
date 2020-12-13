<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hinhanh_xoay extends Model
{
    public    $timestamps   = false; //created_at, updated_at
    protected $table        = 'hinhanh_xoay';
    protected $fillable     = ['haxoay_ten', 'haxoay_hinh','sp_id'];
    protected $guarded      = ['haxoay_id'];
    protected $primaryKey   = 'haxoay_id';


    public function sanpham(){
        return $this->belongsTo('App\sanpham', 'sp_id', 'sp_id');
    }
}
