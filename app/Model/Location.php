<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'lzzt_location';
    protected $fillable = ['name','address','city','flag_show'];
    protected $dates = ['created_at','updated_at'];
    protected $dateFormat = 'Y-m-d H:i:s';
    public function getCreatedAtAttribute($date)
    {
        return date('Y-m-d H:i:s', strtotime($date));
    }
}
