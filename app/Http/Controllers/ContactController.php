<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Kemitraan AS Kemitraan;
use App\Model\SitePageConfig AS Site; 

class ContactController extends Controller
{
    public function index()
    {
        $items = Kemitraan::all();
        $site_menu = Site::where('id', 6)->get();

        return view('frontend.pages.contact',[
            'items' => $items,
            'site_menu' => $site_menu
        ]);
    }
}
