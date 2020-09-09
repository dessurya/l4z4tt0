<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CmsPageConfig;
use App\Model\Inbox;

class InboxController extends Controller
{
    private function getConfig()
    {
        return CmsPageConfig::where('identity','page_inbox')->first()->config;
    }

    public function index()
    {
        $config = $this->getConfig();
        $menu_type = ['reguler','promo'];
        $config['page']['tabs']['tab'][0]['content'] = view('cms.componen.dtables', ['config'=>$config['dtables']])->render();
        $config['page']['tabs']['tab'][1]['content'] = '<div></div>';
        return view('cms.page.menu.index', compact('config'));
    }

    public function data(Request $input)
    {
        $config = $this->getConfig()['dtables'];
        $paginate = 10;
        if (isset($input->show) and !empty($input->show)) {
            $paginate = $input->show;
        }
        $data = Inbox::select('*');
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
        if (isset($input->email) and !empty($input->email)){
            $data->where('email', 'like', '%'.$input->email.'%');
        }
        if (isset($input->name) and !empty($input->name)){
            $data->where('name', 'like', '%'.$input->name.'%');
        }
        if (isset($input->flag_read) and !empty($input->flag_read)){
            $data->where('flag_read', 'like', '%'.$input->flag_read.'%');
        }
        if (isset($input->subject) and !empty($input->subject)){
            $data->where('subject', 'like', '%'.$input->subject.'%');
        }
        $data = $data->paginate($paginate);
        return [
            'renderGetData' => true,
            'data' => $data
        ];
    }

    public function read(Request $input)
    {
        $config = $this->getConfig();
        $ret = [
            'show_tab' => true,
            'show_tab_target' => '#'.$config['page']['tabs']['tab'][1]['id'],
            'render' => true,
            'render_config' => [
                'target' => '#custom-tabs-read'
            ]
        ];
        $inbox = Inbox::find($input->id);
        if ($inbox->flag_read == 'N') {
            $inbox->flag_read = 'Y';
            $inbox->save();
            $ret['rebuildTable'] = true;
        }
        $ret['render_config']['content'] = base64_encode(view('cms.page.inbox.read', compact('inbox'))->render());
        return $ret;
    }
}
