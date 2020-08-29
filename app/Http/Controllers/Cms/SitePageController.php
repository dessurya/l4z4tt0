<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CmsPageConfig;
use App\Model\SitePageConfig;

class SitePageController extends Controller
{
    private function getConfig()
    {
        return CmsPageConfig::where('identity','site_page_config')->first()->config;
    }

    public function index()
    {
        $config = $this->getConfig();
        $config['page']['tabs']['tab'][0]['content'] = view('cms.componen.dtables', ['config'=>$config['dtables']])->render();
        $config['page']['tabs']['tab'][1]['content'] = null;
        return view('cms.page.site_page_config.index', compact('config'));
    }

    public function data(Request $input)
    {
        $config = $this->getConfig()['dtables'];
        $paginate = 10;
        if (isset($input->show) and !empty($input->show)) {
            $paginate = $input->show;
        }
        $data = SitePageConfig::select('*');
        if (isset($input->order_key) and !empty($input->order_key)) {
            $data->orderBy($input->order_key, $input->order_val);
        }else{
            $order = $config['order'];
            $data->orderBy($order['key'], $order['value']);
        }
        if (isset($input->name) and !empty($input->name)){
            $data->where('name', 'like', '%'.$input->name.'%');
        }
        if (isset($input->flag_show) and !empty($input->flag_show)){
            $data->where('flag_show', 'like', '%'.$input->flag_show.'%');
        }
        if (isset($input->last_update_by) and !empty($input->last_update_by)){
            $data->where('last_update_by', 'like', '%'.$input->last_update_by.'%');
        }
        $data = $data->paginate($paginate);
        return [
            'renderGetData' => true,
            'data' => $data
        ];
    }
}
