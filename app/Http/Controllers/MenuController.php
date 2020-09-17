<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Menu AS Menu;
use App\Model\SitePageConfig AS Site; 

class MenuController extends Controller
{
    public function index()
    {
        $Menus = Menu::all();
        $site_menu = Site::where('identity', 'menu')->first();
    
        return view('frontend.pages.menu', [
            'Menus' => $Menus,
            'site_menu' => $site_menu
        ]);
    }

}
