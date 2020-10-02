<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Hash;

class User extends Authenticatable
{
    use Notifiable;
	protected $table = 'lzzt_user';
	protected $hidden = [ 'password' ];
    protected $dates = ['created_at','updated_at'];
    protected $dateFormat = 'Y-m-d H:i:s';

    public function setPasswordAttribute($password){ 
        return $this->attributes['password'] = Hash::make($password); 
    }
    public function getCreatedAtAttribute($date)
    {
        return date('Y-m-d H:i:s', strtotime($date));
    }

    public static function boot() 
    {
		parent::boot();
		self::creating(function ($selfM) {
            if (empty($selfM->password)) { $selfM->password = Hash::make('l3tm3in'); }
		});
    }
    
    public function activeInactiveFlagNotifInbox()
    {
        $this->flag_send_notif = $this->flag_send_notif == 'N' ? 'Y' : 'N';
        $this->save();
    }
}
