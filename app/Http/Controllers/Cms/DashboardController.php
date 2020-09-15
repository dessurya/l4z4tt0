<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Model\Inbox;
use App\Model\Kemitraan;
use App\Model\Location;
use App\Model\Menu;
use App\Model\News;
use App\Model\Slider;

class DashboardController extends Controller
{
    public function index()
    {
        $content = [];
        $Kemitraan = Kemitraan::select('flag_show')->get();
        $Location = Location::select('flag_show')->get();
        $Menu = Menu::select('flag_show','menu')->get();
        $Slider = Slider::select('flag_show')->get();
        $News = News::select('flag_show')->get();

        $content['News'] = [
            'route' => route('cms.news.index'),
            'all' => count($News),
            'show' => count($News->where('flag_show','Y')),
            'hide' => count($News->where('flag_show','N'))
        ];
        $content['Kemitraan'] = [
            'route' => route('cms.kemitraan.index'),
            'all' => count($Kemitraan),
            'show' => count($Kemitraan->where('flag_show','Y')),
            'hide' => count($Kemitraan->where('flag_show','N'))
        ];
        $content['Location'] = [
            'route' => route('cms.location.index'),
            'all' => count($Location),
            'show' => count($Location->where('flag_show','Y')),
            'hide' => count($Location->where('flag_show','N'))
        ];
        $content['Slider'] = [
            'route' => route('cms.slider.index'),
            'all' => count($Slider),
            'show' => count($Slider->where('flag_show','Y')),
            'hide' => count($Slider->where('flag_show','N'))
        ];
        $content['Menu Reguler'] = [
            'route' => route('cms.menu.index'),
            'all' => count($Menu->where('menu','reguler')),
            'show' => count($Menu->where('menu','reguler')->where('flag_show','Y')),
            'hide' => count($Menu->where('menu','reguler')->where('flag_show','N'))
        ];
        $content['Menu Promo'] = [
            'route' => route('cms.menu.index'),
            'all' => count($Menu->where('menu','promo')),
            'show' => count($Menu->where('menu','promo')->where('flag_show','Y')),
            'hide' => count($Menu->where('menu','promo')->where('flag_show','N'))
        ];

        $datas = [
            'content'=> $content,
            'history_inbox'=> DB::table('ds_v_inbox')->orderBy('created_at', 'desc')->get(),
            'history_news'=> DB::table('ds_v_news')->orderBy('created_at', 'desc')->get()
        ];
        return view('cms.page.dashboard.index', compact('datas'));
    }
}
