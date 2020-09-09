<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Config;

class Slider extends Model
{
    protected $table = 'lzzt_slider';
    protected $fillable = ['name','order','flag_show','picture'];
    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->timezone(Config::get('app.timezone'))->format('Y-m-d');
    }
}
