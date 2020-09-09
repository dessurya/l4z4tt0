<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Config;

class Location extends Model
{
    protected $table = 'lzzt_location';
    protected $fillable = ['name','address','city','flag_show'];
    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->timezone(Config::get('app.timezone'))->format('Y-m-d');
    }
}
