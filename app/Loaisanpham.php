<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaisanpham extends Model
{
    public $timestamps = false; //ko muốn tạo 2 cột created_at và updated _at
    
    protected $table        = 'loaisanpham';
    protected $fillable     = ['lsp_ten','lsp_trangthai', 'dm_id'];

    protected $guarded      = ['lsp_id'];
    protected $primaryKey   = 'lsp_id';

    public function sanpham(){
        return $this->hasMany('App\sanpham', 'lsp_id', 'lsp_id');
    }
    public function danhmuc(){
        return $this->belongsTo('App\danhmuc', 'dm_id', 'dm_id');
    }
}
