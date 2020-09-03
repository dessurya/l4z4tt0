<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Kemitraan extends Model
{
    protected $table = 'lzzt_kemitraan';
    protected $fillable = ['name','content','flag_show','picture'];
    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('Y-m-d');
    }
    public function getUpdatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('Y-m-d');
    }
}
