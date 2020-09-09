<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Config;

class Menu extends Model
{
    protected $table = 'lzzt_menu';
    protected $fillable = ['name','menu','flag_show','picture'];
    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->timezone(Config::get('app.timezone'))->format('Y-m-d');
    }
}
