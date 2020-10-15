<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Danhmuc extends Model
{
    public $timestamps = false; //ko muốn tạo 2 cột created_at và updated _at
    
    protected $table        = 'danhmuc';
    protected $fillable     = ['dm_ten','dm_trangthai'];

    protected $guarded      = ['dm_id'];
    protected $primaryKey   = 'dm_id';

    public function loaisanpham(){
        return $this->hasMany('App\loaisanpham', 'dm_id', 'dm_id');
    }
    public function nhacungcap(){
        return $this->belongsTo('App\nhacungcap', 'ncc_id', 'ncc_id');
    }
}
