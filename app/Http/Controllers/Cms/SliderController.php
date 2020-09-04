<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CmsPageConfig;
use App\Model\Slider;
use Auth;

class SliderController extends Controller
{
    private function getConfig()
    {
        return CmsPageConfig::where('identity','page_slider')->first()->config;
    }

    public function index()
    {
        $config = $this->getConfig();
        $config['page']['tabs']['tab'][0]['content'] = view('cms.componen.dtables', ['config'=>$config['dtables']])->render();
        $config['page']['tabs']['tab'][1]['content'] = view('cms.page.slider.form', ['config'=>$config['form']])->render();
        return view('cms.page.menu.index', compact('config'));
    }

    public function data(Request $input)
    {
        $config = $this->getConfig()['dtables'];
        $paginate = 10;
        if (isset($input->show) and !empty($input->show)) {
            $paginate = $input->show;
        }
        $data = Slider::select('*');
        if (isset($input->order_key) and !empty($input->order_key)) {
            $data->orderBy($input->order_key, $input->order_val);
        }else{
            $order = $config['order'];
            $data->orderBy($order['key'], $order['value']);
        }
        if (isset($input->from_created_at) and !empty($input->from_created_at)) {
            $data->whereDate('created_at', '>=', $input->from_created_at);
        }
        if (isset($input->to_created_at) and !empty($input->to_created_at)) {
            $data->whereDate('created_at', '<=', $input->to_created_at);
        }
        if (isset($input->order) and !empty($input->order)){
            $data->where('order', 'like', '%'.$input->order.'%');
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

    public function formNew(Request $input) { return $this->form([ 'data' => [], 'route'=>'new' ]); }

    public function formUpdate(Request $input) { return $this->form([ 'data' => Slider::find($input->id), 'route'=>'update' ]); }

    private function form($param)
    {
        $config = $this->getConfig();
        return [
            'show_tab' => true,
            'show_tab_target' => '#'.$config['page']['tabs']['tab'][1]['id'],
            'fill_form' => true,
            'fill_form_config' => [
                'target' => 'form#'.$config['form']['id'],
                'disabled' => $config['form']['disabled'],
                'required' => $config['form']['required'],
                'route' => route($config['form']['route'][$param['route']]),
                'data' => $param['data']
            ]
        ];
    }

    public function storeNew(Request $input) { return $this->store(new Slider,$input->all()); }
    public function storeUpdate(Request $input)
    {
        $store = Slider::where('id',$input->id)->get();
        if (count($store) == 0) {
            return [
                'pnotify' => true,
                'pnotify_type' => 'error',
                'pnotify_text' => 'Fail, slider not found!'
            ];
        }
        return $this->store($store[0],$input->all());
    }

    private function store($store,$input)
    {
        $store->order = $input['order'];
        $store->picture = $input['picture'];
        $store->last_update_by = Auth::guard('user')->user()->name;
        $store->name = $input['name'];
        $store->save();
        $config = $this->getConfig();
        return [
            'rebuildTable' => true,
            'show_tab' => true,
            'show_tab_target' => '#'.$config['page']['tabs']['tab'][0]['id'],
            'close_form' => true,
            'close_form_target' => 'form#'.$config['form']['id']
        ];
    }

    public function getByExplodeID($Ids)
    {
        return Slider::whereIn('id',explode('^',$Ids))->get();
    }

    public function delete(Request $input)
    {
        foreach ($this->getByExplodeID($input->id) as $row) {
            $row->delete();
        }
        $config = $this->getConfig();
        return [
            'rebuildTable' => true,
            'close_form' => true,
            'close_form_target' => 'form#'.$config['form']['id'],
            'pnotify' => true,
            'pnotify_type' => 'success',
            'pnotify_text' => 'Success delete slider'
        ];
    }

    public function flag(Request $input)
    {
        foreach ($this->getByExplodeID($input->id) as $row) {
            $row->flag_show = $row->flag_show == 'Y' ? 'N' : 'Y';
            $row->save();
        }
        $config = $this->getConfig();
        return [
            'rebuildTable' => true,
            'pnotify' => true,
            'pnotify_type' => 'success',
            'pnotify_text' => 'Success show / hide slider'
        ];
    }
}
