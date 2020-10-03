<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CmsPageConfig;
use App\Model\SitePageConfig;
use Auth;

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

    public function form(Request $input)
    {
        $config = $this->getConfig();
        $select = SitePageConfig::find($input->id);
        $render = view('cms.page.site_page_config.form_'.$select->identity,['data'=>$select])->render();
        return [
            'summernote' => true,
        	'summernote_target' => ['textarea.summernote'],
            'show_tab' => true,
            'show_tab_target' => '#'.$config['page']['tabs']['tab'][1]['id'],
            'render' => true,
            'render_config' => [
                'target' => '#custom-tabs-form',
                'content' => base64_encode($render)
            ]
        ];
    }

    private function store($identity,$data)
    {
        $config = $this->getConfig();
        $store = SitePageConfig::where('identity',$identity)->first();
        $store->name = $data['name'];
        $store->config = $data['config'];
        $store->last_update_by = Auth::guard('user')->user()->name;
        $store->save();
        return [
            'rebuildTable' => true,
            'show_tab' => true,
            'show_tab_target' => '#'.$config['page']['tabs']['tab'][0]['id'],
            'render' => true,
            'render_config' => [
                'target' => '#custom-tabs-form',
                'content' => base64_encode('<div></div>')
            ]
        ];
    }

    public function storeBeranda(Request $input)
    {
        $store = [
            'name' => $input->page_name,
            'config' => [
                'meta' =>[
                    'title' => $input->meta_title,
                    'content' => $input->meta_content,
                    'keyword' => $input->meta_keyword
                ],
                'slider' => [
                    'show' => $input->slider_show,
                    'max_item' => $input->slider_max_item
                ],
                'menu_lazatto' => [
                    'show' => $input->menu_lazatto_show,
                    'title' => $input->menu_lazatto_title,
                    'decription' => $input->menu_lazatto_decription,
                    'title_link' => $input->menu_lazatto_title_link,
                    'max_item' => $input->menu_lazatto_max_item
                ],
                'tentang_kami' => [
                    'show' => $input->tentang_kami_show,
                    'title' => $input->tentang_kami_title,
                    'decription' => $input->tentang_kami_decription,
                    'title_link' => $input->tentang_kami_title_link,
                    'picture' => $input->tentang_kami_picture
                ],
                'news' => [
                    'show' => $input->news_show,
                    'title' => $input->news_title,
                    'decription' => $input->news_decription,
                    'title_link' => $input->news_title_link,
                    'max_item' => $input->news_max_item
                ],
                'location' => [
                    'show' => $input->location_show,
                    'title' => $input->location_title,
                    'picture' => $input->location_picture
                ],
                'kemitraan' => [
                    'show' => $input->kemitraan_show,
                    'title' => $input->kemitraan_title,
                    'decription' => $input->kemitraan_decription,
                    'title_link' => $input->kemitraan_title_link,
                    'max_item' => $input->kemitraan_max_item
                ]
            ]
        ];
        return $this->store('beranda',$store);
    }

    public function storetentangKami(Request $input)
    {
        $store = [
            'name' => $input->page_name,
            'config' => [
                'meta' =>[
                    'title' => $input->meta_title,
                    'content' => $input->meta_content,
                    'keyword' => $input->meta_keyword
                ],
                'banner' => [
                    'show' => $input->banner_show,
                    'title' => $input->banner_title,
                    'picture' => $input->banner_picture
                ],
                'profile' => [
                    'show' => $input->profile_show,
                    'title' => $input->profile_title,
                    'decription' => $input->profile_decription,
                    'picture' => $input->profile_picture
                ],
                'sejarah' => [
                    'show' => $input->sejarah_show,
                    'title' => $input->sejarah_title,
                    'decription' => $input->sejarah_decription,
                    'picture' => $input->sejarah_picture
                ],
                'visi_misi' => [
                    'show' => $input->visi_misi_show,
                    'title' => $input->visi_misi_title,
                    'visi_content' => $input->visi_misi_visi_content,
                    'visi_picture' => $input->visi_misi_visi_picture,
                    'misi_content' => $input->visi_misi_misi_content,
                    'misi_picture' => $input->visi_misi_misi_picture
                ]
            ]
        ];
        return $this->store('tentang_kami',$store);
    }

    public function storeMenu(Request $input)
    {
        $store = [
            'name' => $input->page_name,
            'config' => [
                'meta' =>[
                    'title' => $input->meta_title,
                    'content' => $input->meta_content,
                    'keyword' => $input->meta_keyword
                ],
                'banner' => [
                    'show' => $input->banner_show,
                    'title' => $input->banner_title,
                    'picture' => $input->banner_picture
                ],
                'promo' => [
                    'show' => $input->promo_show,
                    'title' => $input->promo_title,
                    'decription' => $input->promo_decription
                ],
                'reguler' => [
                    'show' => $input->reguler_show,
                    'title' => $input->reguler_title,
                    'decription' => $input->reguler_decription
                ]
            ]
        ];
        return $this->store('menu',$store);
    }

    public function storeNews(Request $input)
    {
        $store = [
            'name' => $input->page_name,
            'config' => [
                'meta' =>[
                    'title' => $input->meta_title,
                    'content' => $input->meta_content,
                    'keyword' => $input->meta_keyword
                ],
                'banner' => [
                    'show' => $input->banner_show,
                    'title' => $input->banner_title,
                    'picture' => $input->banner_picture
                ],
                'news' => [
                    'show' => $input->news_show,
                    'title' => $input->news_title
                ]
            ]
        ];
        return $this->store('news',$store);
    }

    public function storeLocation(Request $input)
    {
        $store = [
            'name' => $input->page_name,
            'config' => [
                'meta' =>[
                    'title' => $input->meta_title,
                    'content' => $input->meta_content,
                    'keyword' => $input->meta_keyword
                ],
                'maps' => [
                    'show' => $input->maps_show,
                    'title' => $input->maps_title,
                    'picture' => $input->maps_picture
                ],
                'information' => [
                    'show' => $input->information_show,
                    'title' => $input->information_title
                ]
            ]
        ];
        return $this->store('location',$store);
    }

    public function storeContact(Request $input)
    {
        $store = [
            'name' => $input->page_name,
            'config' => [
                'meta' =>[
                    'title' => $input->meta_title,
                    'content' => $input->meta_content,
                    'keyword' => $input->meta_keyword
                ],
                'banner' => [
                    'show' => $input->banner_show,
                    'title' => $input->banner_title,
                    'picture' => $input->banner_picture
                ],
                'form' => [
                    'show' => $input->form_show,
                    'title' => $input->form_title,
                    'decription' => $input->form_decription,
                    'picture' => $input->form_picture
                ],
                'kemitraan' => [
                    'show' => $input->kemitraan_show,
                    'title' => $input->kemitraan_title,
                    'decription' => $input->kemitraan_decription
                ]
            ]
        ];
        return $this->store('contact',$store);
    }

    public function storeSitePublicConfig(Request $input)
    {
        $store = [
            'name' => $input->name,
            'config' => [
                'wa_no' => $input->wa_no,
                'website' => [ 'icon' => $input->website_icon],
                'navigasi' => [ 'logo' => $input->navigasi_logo],
                'footer' => [
                    'logo' => $input->footer_logo,
                    'quote' => $input->footer_quote,
                    'contact' => $input->footer_contact,
                    'max_item' => $input->footer_max_item
                ]
            ]
        ];
        return $this->store('site_public_config',$store);
    }

    public function showOrHide(Request $input)
    {
        foreach (SitePageConfig::whereIn('id', explode('^',$input->id))->get() as $list) {
            $list->flag_show = $list->flag_show == 'Y' ? 'N' : 'Y';
            $list->save();
        }
        return [
            'rebuildTable' => true,
            'render' => true,
            'render_config' => [
                'target' => '#custom-tabs-form',
                'content' => base64_encode('<div></div>')
            ]
        ];
    }
}
