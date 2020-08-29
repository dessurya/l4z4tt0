<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
        return Carbon::parse($date)->format('Y-m-d');
    }
    public function getUpdatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('Y-m-d');
    }
}
