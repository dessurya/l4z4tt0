<?php

use Illuminate\Database\Seeder;
use App\Model\Menu;
use App\Model\Slider;
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
            ['name'=>'Slider 2','order'=>2,'picture'=>$Slider1]
        ];

        foreach ($stores as $key => $store) {
            Slider::create($store);
        }
    }
}
