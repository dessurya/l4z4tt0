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

    public static function boot() {
		parent::boot();
		self::creating(function ($selfM) {
			$selfM->slug = Str::slug($selfM->name,'-').'_'.(new Carbon($selfM->createt_at))->format('Y_m_d'); 
        });
        self::updating(function ($selfM) {
			$selfM->slug = Str::slug($selfM->name,'-').'_'.(new Carbon($selfM->createt_at))->format('Y_m_d'); 
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
        return Carbon::parse($date)->timezone(Config::get('app.timezone'))->format('Y-m-d');
    }
}
