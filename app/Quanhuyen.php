<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quanhuyen extends Model
{
    public $timestamps = false; //ko muốn tạo 2 cột created_at và updated _at
    
    protected $table        = 'quanhuyen';
    protected $fillable     = ['qh_ten','qh_loai', 'tinhtp_id'];

    protected $guarded      = ['qh_id'];
    protected $primaryKey   = 'qh_id';

    public function phuongxa(){
        return $this->hasMany('App\phuongxa', 'qh_id', 'qh_id');
    }
    public function tinhthanhpho(){
        return $this->belongsTo('App\tinhthanhpho', 'tinhtp_id', 'tinhtp_id');
    }
}
