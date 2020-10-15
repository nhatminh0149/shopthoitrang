<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hinhthucvanchuyen extends Model
{
    public $timestamps = false; //ko muốn tạo 2 cột created_at và updated _at
    
    protected $table        = 'hinhthucvanchuyen';
    protected $fillable     = ['htvc_ten', 'htvc_chiphi', 'htvc_diengiai', 'htvc_trangthai'];

    protected $guarded      = ['htvc_id'];
    protected $primaryKey   = 'htvc_id';

    public function dondathang(){
        return $this->hasMany('App\dondathang', 'htvc_id', 'htvc_id');
    }
}
