<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kemitraan extends Model
{
    protected $table = 'lzzt_kemitraan';
    protected $fillable = ['name','content','flag_show','picture'];
    protected $dates = ['created_at','updated_at'];
    protected $dateFormat = 'Y-m-d H:i:s';
    public function getCreatedAtAttribute($date)
    {
        return date('Y-m-d H:i:s', strtotime($date));
    }
}
