<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder; //bắt buộc tham chiếu lớp Eloquent Builder

class HinhAnh extends Model
{
    public    $timestamps   = false; //created_at, updated_at
    protected $table        = 'hinhanh';
    protected $fillable     = ['ha_ten', 'sp_id'];
    // protected $guarded      = ['sp_id', 'ha_id'];
    // protected $primaryKey   = ['sp_id', 'ha_id'];
    protected $guarded      = ['ha_id'];
    protected $primaryKey   = 'ha_id';
    //public    $incrementing = false; // id ko dc tu tang vì có 2 khóa chính

    public function sanpham(){
        return $this->belongsTo('App\sanpham', 'sp_id', 'sp_id');
    }
    //cập nhật Model có hai khóa chính. => cần ghi đè 1 số thuộc tính
    /**
     * Set the keys for a save update query.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function setKeysForSaveQuery(Builder $query)
    {
        $keys = $this->getKeyName();
        if(!is_array($keys)){
            return parent::setKeysForSaveQuery($query);
        }
        foreach($keys as $keyName){
            $query->where($keyName, '=', $this->getKeyForSaveQuery($keyName));
        }
        return $query;
    }
    /**
     * Get the primary key value for a save query.
     *
     * @param mixed $keyName
     * @return mixed
     */
    protected function getKeyForSaveQuery($keyName = null)
    {
        if(is_null($keyName)){
            $keyName = $this->getKeyName();
        }
        if (isset($this->original[$keyName])) {
            return $this->original[$keyName];
        }
        return $this->getAttribute($keyName);
    }
}
