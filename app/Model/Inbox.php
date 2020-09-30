<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    protected $table = 'lzzt_inbox';
    protected $fillable = ['name','email','subject','message','flag_read','flag_send'];
    protected $dates = ['created_at','updated_at'];
    protected $dateFormat = 'Y-m-d H:i:s';
    
    public function getCreatedAtAttribute($date)
    {
        return date('Y-m-d H:i:s', strtotime($date));
    }

    public function flagSendNotif()
    {
        $this->flag_send = 'N';
        $this->save();
    }
}
