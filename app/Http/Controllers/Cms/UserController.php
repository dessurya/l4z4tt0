<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CmsPageConfig;
use App\Model\User;
use Validator;
use Auth;
use Hash;

class UserController extends Controller
{
    private function getConfig()
    {
        return CmsPageConfig::where('identity','page_user')->first()->config;
    }

    public function index()
    {
        $config = $this->getConfig();
        $config['page']['tabs']['tab'][0]['content'] = view('cms.componen.dtables', ['config'=>$config['dtables']])->render();
        $config['page']['tabs']['tab'][1]['content'] = view('cms.page.user.form', ['config'=>$config['form']])->render();
        return view('cms.page.user.index', compact('config'));
    }

    public function data(Request $input)
    {
        $config = $this->getConfig()['dtables'];
        $paginate = 10;
        if (isset($input->show) and !empty($input->show)) {
            $paginate = $input->show;
        }
        $data = User::select('*');
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
        $data = $data->paginate($paginate);
        return [
            'renderGetData' => true,
            'data' => $data
        ];
    }

    public function formNew(Request $input) { return $this->form([ 'data' => [], 'route'=>'new' ]); }

    public function formUpdate(Request $input) { return $this->form([ 'data' => User::find($input->id), 'route'=>'update' ]); }

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

    public function storeNew(Request $input)
    {
        $message = [];
        $validator = Validator::make($input->all(), [
                'name' => 'required|max:175',
                'email' => 'required|max:175|unique:lzzt_user,email',
        ], $message);
        if ($validator->fails()) {
            return [
                "validatorError" => true,
                "data" => $validator->getMessageBag()->toArray()
            ];
        }
        return $this->store(new User,$input->all());
    }

    public function storeUpdate(Request $input)
    {
        if ($input->id == Auth::guard('user')->user()->id) {
            return [
                'pnotify' => true,
                'pnotify_type' => 'error',
                'pnotify_text' => 'Fail, cant update your data from this form!'
            ];
        }
        $message = [];
        $validator = Validator::make($input->all(), [
                'name' => 'required|max:175',
                'email' => 'required|max:175|unique:lzzt_user,email,'.$input->id,
        ], $message);
        if ($validator->fails()) {
            return [
                "validatorError" => true,
                "data" => $validator->getMessageBag()->toArray()
            ];
        }
        return $this->store(User::find($input->id),$input->all());
    }

    public function profileStore(Request $input)
    {
        $self = User::find(Auth::guard('user')->user()->id);
        $message = [];
        $validator = Validator::make($input->all(), [
                'name' => 'required|max:175',
                'password' => 'required',
                'email' => 'required|max:175|unique:lzzt_user,email,'.$self->id,
        ], $message);
        if ($validator->fails()) { return redirect()->back()->with('status', 'Fail, '.json_encode($validator->getMessageBag()->toArray())); }
        if (!Hash::check($input->password, $self->password)){ return redirect()->back()->with('status', 'Fail, your old password not correct!'); }
        if (!empty($input->n_password) or !empty($input->c_password)) {
            if($input->n_password != $input->c_password){ return redirect()->back()->with('status', 'Fail, new password and confirm password not same!'); }
            $self->password = $input->n_password;
        }
        $self->email = $input->email;
        $self->name = $input->name;
        $self->save();
        return redirect()->back()->with('status', 'Success update your profile');
    }

    private function store($store,$input)
    {
        $store->email = $input['email'];
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

    public function delete(Request $input)
    {
        foreach (User::whereIn('id',explode('^',$input->id))->get() as $user) {
            if ($user->id != Auth::guard('user')->user()->id) {
                $user->delete();
            }
        }
        $config = $this->getConfig();
        return [
            'rebuildTable' => true,
            'close_form' => true,
            'close_form_target' => 'form#'.$config['form']['id'],
            'pnotify' => true,
            'pnotify_type' => 'success',
            'pnotify_text' => 'Success delete user'
        ];
    }

    public function resetPassword(Request $input)
    {
        $config = $this->getConfig();
        foreach (User::whereIn('id',explode('^',$input->id))->get() as $user) {
            if ($user->id != Auth::guard('user')->user()->id) {
                $user->password = 'l3tm3in';
                $user->save();
            }
        }
        return [
            'pnotify' => true,
            'pnotify_type' => 'success',
            'pnotify_text' => 'Success reset password user'
        ];
    }

    public function profile()
    {
        return view('cms.page.user.profile');
    }
}
