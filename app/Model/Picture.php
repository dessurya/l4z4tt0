<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Config;

class Picture extends Model
{
    protected $table = 'lzzt_picture';
    protected $fillable = ['name','url'];
    public function getUrlAttribute($pic)
    {
        if (!empty($pic)) {
            return asset($pic);
        }
        return null;
    }
    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->timezone(Config::get('app.timezone'))->format('Y-m-d');
    }
}
