<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gia extends Model
{
    public $timestamps = false; //ko muốn tạo 2 cột created_at và updated _at
    
    protected $table        = 'gia';
    protected $fillable     = ['ngay','giaban', 'sp_id'];

    protected $guarded      = ['id_gia'];
    protected $primaryKey   = 'id_gia';

    protected $dates        = ['ngay'];
    protected $dateFormat   = 'Y-m-d H:i:s';

    public function sanpham(){
        return $this->belongsTo('App\sanpham', 'sp_id', 'sp_id');
    }
}
