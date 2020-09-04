<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Slider;
use App\Model\Picture;
use App\Model\SitePageConfig AS Site;

class HomeController extends Controller
{
    public function index(){
        $items = Slider::all();     
        $picture = Picture::all();  
        $site_menu = Site::where('id', 1)->get();        
        return view('frontend/pages/home',[
            'items' => $items,
            'picture' => $picture,
            'site_menu' => $site_menu,
        ]);
    }
}
