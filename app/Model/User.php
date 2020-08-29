<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
use Hash;

class User extends Authenticatable
{
    use Notifiable;
	protected $table = 'lzzt_user';
	protected $hidden = [
        'password'
    ];

    public function setPasswordAttribute($password){ 
        return $this->attributes['password'] = Hash::make($password); 
    }
    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('Y-m-d');
    }
    public function getUpdatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('Y-m-d');
    }

    public static function boot() {
		parent::boot();
		self::creating(function ($selfM) {
			$selfM->password = Hash::make('l3tm3in');
		});
	}
}
