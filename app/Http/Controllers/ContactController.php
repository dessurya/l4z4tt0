<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Kemitraan AS Kemitraan;
use App\Model\SitePageConfig AS Site; 

class ContactController extends Controller
{
    public function index()
    {
        $items = Kemitraan::where('flag_show','Y')->get();
        $site_menu = Site::where('identity', 'contact')->first();

        return view('frontend.pages.contact',[
            'items' => $items,
            'site_menu' => $site_menu
        ]);
    }
}
