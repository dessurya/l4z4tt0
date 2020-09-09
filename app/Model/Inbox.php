<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    protected $table = 'lzzt_inbox';
    protected $fillable = ['name','email','subject','message','flag_read'];
}
