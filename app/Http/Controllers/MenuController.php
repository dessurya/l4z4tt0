<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Menu AS Menu;
use App\Model\SitePageConfig AS Site; 

class MenuController extends Controller
{
    public function index()
    {
        $items = Menu::all();
        $site_menu = Site::where('id', 3)->get();
    
        return view('frontend.pages.menu', [
            'items' => $items,
            'site_menu' => $site_menu
        ]);
    }

}
