<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tinhthanhpho extends Model
{
    public $timestamps = false; //ko muốn tạo 2 cột created_at và updated _at
    
    protected $table        = 'tinhthanhpho';
    protected $fillable     = ['tinhtp_ten', 'tinhtp_loai'];

    protected $guarded      = ['tinhtp_id'];
    protected $primaryKey   = 'tinhtp_id';

    public function quanhuyen(){
        return $this->hasMany('App\quanhuyen', 'tinhtp_id', 'tinhtp_id');
    }
}
