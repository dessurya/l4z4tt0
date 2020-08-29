<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SitePageConfig extends Model
{
    protected $table = 'lzzt_site_page_config';
    protected $fillable = ['identity','name','flag_show','config'];
    
    public function setConfigAttribute($arr){ 
        return $this->attributes['config'] = json_encode($arr); 
    }
    public function getConfigAttribute($json)
    {
        return json_decode($json,true);
    }
}
