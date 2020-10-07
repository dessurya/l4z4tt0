<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Kemitraan AS Kemitraan;
use App\Model\SitePageConfig AS Site; 
use App\Model\Inbox;

class ContactController extends Controller
{
    public function index()
    {
        $items = Kemitraan::where('flag_show','Y')->orderBy('order','asc')->get();
        $site_menu = Site::where('identity', 'contact')->first();

        return view('frontend.pages.contact',[
            'items' => $items,
            'site_menu' => $site_menu
        ]);
    }

    public function inboxAdd(Request $input)
    {
        $store = new Inbox;
        $store->name = $input->name;
        $store->email = $input->email;
        $store->subject = $input->subject;
        $store->message = $input->message;
        $store->save();
        return redirect()->back()->with('info', 'Terimakasih atas tanggapan anda');
    }
}
