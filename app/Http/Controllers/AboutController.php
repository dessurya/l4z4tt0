<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\SitePageConfig AS Site;

class AboutController extends Controller
{
    public function index()
    {
        $site_menu = Site::where('id', 2)->get();        
        return view('frontend/pages/about',[
            'site_menu' => $site_menu
        ]);
    }
}
