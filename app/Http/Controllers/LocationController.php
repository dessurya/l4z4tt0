<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Location AS Location;
use App\Model\SitePageConfig AS Site; 

class LocationController extends Controller
{
    public function index()
    {
        $items = Location::select('city')->distinct()->with(['collapseLocation' => function($model){
            $model->where('flag_show','Y');
        }])->get();
        $site_menu = Site::where('identity', 'location')->first();
        return view('frontend.pages.location',[
            'items' => $items,
            'site_menu' => $site_menu
        ]);
    }
}
