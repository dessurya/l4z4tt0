<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Slider AS Slider;
use App\Model\Picture AS Picture;
use App\Model\SitePageConfig AS Site;
use App\Model\Menu AS Menu;

class HomeController extends Controller
{
    public function index(){
        $items = Slider::all();     
        $picture = Picture::all();  
        $menu_reguler = Menu::where('menu', 'reguler')->take(10)->get();  
        $site_menu = Site::where('id', 1)->get();        
        return view('frontend/pages/home',[
            'items' => $items,
            'picture' => $picture,
            'menu_reguler' => $menu_reguler,
            'site_menu' => $site_menu,
        ]);
    }
}
