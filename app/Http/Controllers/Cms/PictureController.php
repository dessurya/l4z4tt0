<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Model\CmsPageConfig;
use App\Model\Picture;
use Carbon\Carbon;

class PictureController extends Controller
{
    private function getConfig()
    {
        return CmsPageConfig::where('identity','page_picture')->first()->config;
    }

    public function index()
    {
        $config = $this->getConfig();
        $config['page']['tabs']['tab'][0]['content'] = '<button id="clickRefresPicList" onclick="callPicture()" class="btn btn-block btn-primary">Refresh List</button><br><div id="picture-content" class="row"></div>';
        $config['page']['tabs']['tab'][1]['content'] = view('cms.page.picture.form')->render();
        return view('cms.page.picture.index', compact('config'));
    }

    public function data(Request $input)
    {
        $data = Picture::orderBy('created_at','desc')->paginate(4);
        return [
            'reCallPicture' => true,
            'reCallPicture_config' => $data,
            'append' => true,
            'append_config' => [
                'target' => '#custom-tabs-list #picture-content',
                'content' => base64_encode(view('cms.page.picture.picture_card',['data'=>$data])->render())
            ]
        ];
    }

    public function delete(Request $input)
    {
        $find = Picture::find($input->id);
        $dir = 'asset/picture/upload/';
        if ($find) {
            $picture = explode($dir, $find->url);
            unlink($dir.$picture[1]);
            $find->delete();
            return [
                'pnotify' => true,
                'pnotify_type' => 'success',
                'pnotify_text' => 'Success delete picture!'
            ];
        }
        return [
            'pnotify' => true,
            'pnotify_type' => 'error',
            'pnotify_text' => 'Picture not found!'
        ];
    }

    public function store(Request $input)
    {
        $config = $this->getConfig();
        $url = 'asset/picture/upload/'.Carbon::now()->format('Ymd').'/';
        $dir = '';
        foreach (explode('/',$url) as $item) {
            $dir .= $item.'/';
            if (!file_exists($dir)){ mkdir($dir, 0777); }
        }
        $file_name = Carbon::now()->format('his').Str::random(4).'_'.Str::slug(explode('.',$input->name)[0],'-').'.'.explode('/',$input->type)[1];
        try {
            file_put_contents($dir.$file_name, base64_decode($input->encode));
        } catch (Exception $e) {
            $response = $e->getMessage();
        }
        $store = new Picture;
        $store->url = $dir.$file_name;
        $store->save();
        return [
            // 'callPicture' => true,
            'pnotify' => true,
            'pnotify_type' => 'success',
            'pnotify_text' => 'Success upload picture : '.$input->name.'!'
        ];
    }
}
