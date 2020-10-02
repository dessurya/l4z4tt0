<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\News AS News;
use App\Model\SitePageConfig AS Site; 

class NewsController extends Controller
{
    public function index()
    {
        $items = News::paginate(6);
        $site_menu = Site::where('identity', 'news')->first();

        return view('frontend.pages.news',[
            'items' => $items,
            'site_menu' => $site_menu
        ]);
    }

    public function detail($slug)
    {
        $item = News::where('slug', $slug)->first();
        return view('frontend.pages.news-detail', [
            'item' => $item
        ]);
    }
}
