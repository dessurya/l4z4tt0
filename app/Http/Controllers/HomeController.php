<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\SitePageConfig AS Site;
use App\Model\Slider;
use App\Model\Menu;
use App\Model\News;
use App\Model\Kemitraan;

class HomeController extends Controller
{
    public function index(){
        $site_menu = Site::where('identity', 'beranda')->first();
        $menuData = $site_menu->config;

        return view('frontend/pages/home',[
            'menuData' => $menuData,
            'items' => Slider::where('flag_show', 'Y')->orderBy('order', 'asc')->limit($menuData['slider']['max_item'])->get(),
            'menu_reguler' => Menu::where(['menu'=>'reguler','flag_show'=>'Y'])->orderBy('id','desc')->limit($menuData['menu_lazatto']['max_item'])->get(),
            'news' => News::where('flag_show', 'Y')->orderBy('id','desc')->limit($menuData['news']['max_item'])->get(),
            'Kemitraan' => Kemitraan::where('flag_show', 'Y')->orderBy('order','asc')->limit($menuData['kemitraan']['max_item'])->get(),
        ]);
    }

    public static function getHeader()
    {
        $site_menu = Site::where('flag_show','Y')->whereNotIn('identity', ['site_public_config'])->orderBy('id','asc')->get();
        $navigasi_logo = static::getSiteConfig()->config;
        $navigasi_logo = $navigasi_logo['navigasi']['logo'];
        echo view('frontend.layout.header', compact('site_menu','navigasi_logo'))->render();
    }

    public static function getFooter()
    {
        $site_menu = Site::where('flag_show','Y')->whereNotIn('identity', ['site_public_config'])->orderBy('id','asc')->get();
        $footer_componen = static::getSiteConfig()->config;
        $footer_componen = $footer_componen['footer'];
        $Kemitraan = Kemitraan::where('flag_show', 'Y')->orderBy('order','asc')->limit($footer_componen['max_item'])->get();
        echo view('frontend.layout.footer', compact('site_menu','footer_componen','Kemitraan'))->render();
    }

    public static function getSiteConfig()
    {
        return Site::where('identity', 'site_public_config')->first();
    }

    public static function getSiteIcon()
    {
        $siteConf = static::getSiteConfig()->config;
        return $siteConf['website']['icon'];
    }
}
