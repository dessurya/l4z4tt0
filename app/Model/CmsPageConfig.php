<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CmsPageConfig extends Model
{
	protected $table = 'lzzt_cms_page_config';
    protected $fillable = ['identity','config'];
    
    public function setConfigAttribute($arr){ 
        return $this->attributes['config'] = json_encode($arr); 
    }
    public function getConfigAttribute($json)
    {
        return json_decode($json,true);
    }
}
