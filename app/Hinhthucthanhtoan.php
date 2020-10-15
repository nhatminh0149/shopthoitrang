<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hinhthucthanhtoan extends Model
{
    public $timestamps = false; //ko muốn tạo 2 cột created_at và updated _at
    
    protected $table        = 'hinhthucthanhtoan';
    protected $fillable     = ['httt_ten', 'httt_trangthai'];

    protected $guarded      = ['httt_id'];
    protected $primaryKey   = 'httt_id';

    public function dondathang(){
        return $this->hasMany('App\dondathang', 'httt_id', 'httt_id');
    }
}
