<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Config;

class News extends Model
{
    protected $table = 'lzzt_news';
    protected $fillable = ['name','introduction','flag_show','picture','content','banner','slug','meta_title','meta_content','meta_keyword'];
    protected $dates = ['created_at','updated_at'];
    protected $dateFormat = 'Y-m-d H:i:s';

    public static function boot() {
		parent::boot();
		self::creating(function ($selfM) {
			$selfM->slug = Str::slug($selfM->name,'-').'_'.(new Carbon($selfM->createt_at))->timezone(Config::get('app.timezone'))->format('Ymd_His'); 
        });
        self::updating(function ($selfM) {
			$selfM->slug = Str::slug($selfM->name,'-').'_'.(new Carbon($selfM->createt_at))->timezone(Config::get('app.timezone'))->format('Ymd_His'); 
		});
	}

    public function setMetaAttribute($arr){ 
        return $this->attributes['config'] = json_encode($arr); 
    }
    public function getMetaAttribute($json)
    {
        return json_decode($json,true);
    }
    public function getCreatedAtAttribute($date)
    {
        return date('Y-m-d H:i:s', strtotime($date));
    }
}
