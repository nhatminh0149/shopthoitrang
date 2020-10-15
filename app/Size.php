<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public $timestamps = false; //ko muốn tạo 2 cột created_at và updated _at
    
    protected $table        = 'size';
    protected $fillable     = ['size_ten'];

    protected $guarded      = ['size_id'];
    protected $primaryKey   = 'size_id';

    public function size_sanpham(){
        return $this->hasMany('App\size_sanpham', 'size_id', 'size_id');
    }
    public function chitietdonhang(){
        return $this->hasMany('App\chitietdonhang', 'size_id', 'size_id');
    }
}
