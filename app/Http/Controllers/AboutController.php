<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\SitePageConfig AS Site;

class AboutController extends Controller
{
    public function index()
    {
        $site_menu = Site::where('identity', 'tentang_kami')->first();
        return view('frontend.pages.about',compact('site_menu'));
    }
}
