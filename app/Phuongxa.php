<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phuongxa extends Model
{
    public $timestamps = false; //ko muốn tạo 2 cột created_at và updated _at
    
    protected $table        = 'phuongxa';
    protected $fillable     = ['px_ten','px_loai', 'qh_id'];

    protected $guarded      = ['px_id'];
    protected $primaryKey   = 'px_id';

    public function dondathang(){
        return $this->hasMany('App\dondathang', 'px_id', 'px_id');
    }
    public function quanhuyen(){
        return $this->belongsTo('App\quanhuyen', 'qh_id', 'qh_id');
    }
}
