<?php

use Illuminate\Database\Seeder;
use App\Model\Menu;
use App\Model\Slider;
use App\Model\Kemitraan;
use App\Model\Location;
use App\Model\News;
use App\Model\Inbox;
use App\Model\Picture;

class SeederContent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->menuReguler();
        $this->menuPromo();
        $this->Slider();
        $this->Kemitraan();
        $this->Location();
        $this->News();
        $this->Inbox();
    }

    private function menuPromo()
    {
        $menu1 = Picture::find(5)->url;
        $menu2 = Picture::find(6)->url;
        $stores = [
            ['name'=>'Promo 1','menu'=>'promo','picture'=>$menu1],
            ['name'=>'Promo 2','menu'=>'promo','picture'=>$menu1],
            ['name'=>'Promo 3','menu'=>'promo','picture'=>$menu1],
            ['name'=>'Promo 4','menu'=>'promo','picture'=>$menu1],
            ['name'=>'Promo 5','menu'=>'promo','picture'=>$menu1],
            ['name'=>'Promo 6','menu'=>'promo','picture'=>$menu2],
            ['name'=>'Promo 7','menu'=>'promo','picture'=>$menu2],
            ['name'=>'Promo 8','menu'=>'promo','picture'=>$menu2],
            ['name'=>'Promo 9','menu'=>'promo','picture'=>$menu2],
            ['name'=>'Promo 10','menu'=>'promo','picture'=>$menu2]
        ];

        foreach ($stores as $key => $store) {
            Menu::create($store);
        }
    }

    private function menuReguler()
    {
        $menu1 = Picture::find(5)->url;
        $menu2 = Picture::find(6)->url;
        $stores = [
            ['name'=>'Reguler 1','menu'=>'reguler','picture'=>$menu1],
            ['name'=>'Reguler 2','menu'=>'reguler','picture'=>$menu1],
            ['name'=>'Reguler 3','menu'=>'reguler','picture'=>$menu1],
            ['name'=>'Reguler 4','menu'=>'reguler','picture'=>$menu1],
            ['name'=>'Reguler 5','menu'=>'reguler','picture'=>$menu1],
            ['name'=>'Reguler 6','menu'=>'reguler','picture'=>$menu2],
            ['name'=>'Reguler 7','menu'=>'reguler','picture'=>$menu2],
            ['name'=>'Reguler 8','menu'=>'reguler','picture'=>$menu2],
            ['name'=>'Reguler 9','menu'=>'reguler','picture'=>$menu2],
            ['name'=>'Reguler 10','menu'=>'reguler','picture'=>$menu2]
        ];

        foreach ($stores as $key => $store) {
            Menu::create($store);
        }
    }

    private function Slider()
    {
        $Slider1 = Picture::find(2)->url;
        $Slider2 = Picture::find(4)->url;
        $stores = [
            ['name'=>'Slider 1','order'=>1,'picture'=>$Slider1],
            ['name'=>'Slider 2','order'=>2,'picture'=>$Slider2]
        ];

        foreach ($stores as $key => $store) {
            Slider::create($store);
        }
    }

    private function Kemitraan()
    {
        $pic = Picture::find(1)->url;
        $stores = [
            ['name'=>'Kemitraan 1','order'=>1, 'picture'=>$pic,'content'=>'That dominion stars lights dominion divide years for fourth have dont stars is that he earth it first without heaven in place seed it second morning saying.That dominion stars lights dominion divide years for fourth have dont stars is that he earth it first without heaven in place seed it second morning saying.'],
            ['name'=>'Kemitraan 2','order'=>2, 'picture'=>$pic,'content'=>'That dominion stars lights dominion divide years for fourth have dont stars is that he earth it first without heaven in place seed it second morning saying.That dominion stars lights dominion divide years for fourth have dont stars is that he earth it first without heaven in place seed it second morning saying.'],
            ['name'=>'Kemitraan 3','order'=>3, 'picture'=>$pic,'content'=>'That dominion stars lights dominion divide years for fourth have dont stars is that he earth it first without heaven in place seed it second morning saying.That dominion stars lights dominion divide years for fourth have dont stars is that he earth it first without heaven in place seed it second morning saying.']
        ];

        foreach ($stores as $key => $store) {
            Kemitraan::create($store);
        }
    }

    private function Location()
    {
        $stores = [
            ['name'=>'Outlate 1 J', 'city'=> 'Jakarta'],
            ['name'=>'Outlate 2 J', 'city'=> 'Jakarta'],
            ['name'=>'Outlate 3 J', 'city'=> 'Jakarta'],
            ['name'=>'Outlate 4 J', 'city'=> 'Jakarta'],
            ['name'=>'Outlate 1 B', 'city'=> 'Bekasi'],
            ['name'=>'Outlate 2 B', 'city'=> 'Bekasi'],
            ['name'=>'Outlate 3 B', 'city'=> 'Bekasi'],
            ['name'=>'Outlate 4 B', 'city'=> 'Bekasi'],
            ['name'=>'Outlate 1 T', 'city'=> 'Tangerang'],
            ['name'=>'Outlate 2 T', 'city'=> 'Tangerang'],
            ['name'=>'Outlate 3 T', 'city'=> 'Tangerang'],
            ['name'=>'Outlate 4 T', 'city'=> 'Tangerang'],
            ['name'=>'Outlate 1 D', 'city'=> 'Depok'],
            ['name'=>'Outlate 2 D', 'city'=> 'Depok'],
            ['name'=>'Outlate 3 D', 'city'=> 'Depok'],
            ['name'=>'Outlate 4 D', 'city'=> 'Depok'],
        ];

        foreach ($stores as $key => $store) {
            Location::create($store);
        }
    }

    private function News()
    {
        $picture = Picture::find(1)->url;
        $stores = [
            ['name'=>'News Here 1 J', 'picture'=>$picture,'introduction'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.</p>'],
            ['name'=>'News Here 2 J', 'picture'=>$picture,'introduction'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.</p>'],
            ['name'=>'News Here 3 J', 'picture'=>$picture,'introduction'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.</p>']
        ];

        foreach ($stores as $key => $store) {
            News::create($store);
        }
    }

    private function Inbox()
    {
        $stores = [
            ['name'=>'Visitor 1', 'email'=>'visitor1@mail.mail', 'subject'=>'subject 1', 'message'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.' ],
            ['name'=>'Visitor 2', 'email'=>'visitor2@mail.mail', 'subject'=>'subject 2', 'message'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.' ],
            ['name'=>'Visitor 3', 'email'=>'visitor3@mail.mail', 'subject'=>'subject 3', 'message'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.' ],
            ['name'=>'Visitor 4', 'email'=>'visitor4@mail.mail', 'subject'=>'subject 4', 'message'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.' ],
        ];

        foreach ($stores as $key => $store) {
            Inbox::create($store);
        }
    }
}
