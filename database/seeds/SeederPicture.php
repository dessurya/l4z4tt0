<?php

use Illuminate\Database\Seeder;
use App\Model\Picture;

class SeederPicture extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $toAsset = 'asset/picture/default/site/';
        $stores = [
            ['url'=>asset($toAsset.'LOGO_LAZATTO.png')],
            ['url'=>asset($toAsset.'HomeBanner.jpg')],
            ['url'=>asset($toAsset.'MAP.png')],
            ['url'=>asset($toAsset.'BannerSample.jpg')],
            ['url'=>asset($toAsset.'Menu1.jpg')],
            ['url'=>asset($toAsset.'Menu2.jpg')]
        ];

        foreach ($stores as $key => $store) {
            Picture::create($store);
        }
    }
}
