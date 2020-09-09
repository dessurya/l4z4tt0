<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Config;

class Inbox extends Model
{
    protected $table = 'lzzt_inbox';
    protected $fillable = ['name','email','subject','message','flag_read'];
    
    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->timezone(Config::get('app.timezone'))->format('Y-m-d H:i:s');
    }
}
