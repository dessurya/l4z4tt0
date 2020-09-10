<?php

use Illuminate\Database\Seeder;
use App\Model\SitePageConfig;
use App\Model\Picture;

class SeederSitePageConfig extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stores = [
            [
                'identity' => 'beranda',
                'name' => 'Beranda',
                'config' => [
                    'meta' =>[
                        'title' => 'meta_title',
                        'content' => 'meta_content',
                        'keyword' => 'meta_keyword'
                    ],
                    'slider' => [
                        'show' => 'true',
                        'max_item' => 3
                    ],
                    'menu_lazatto' => [
                        'show' => 'true',
                        'title' => 'Menu Lazzato',
                        'decription' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.</p>',
                        'title_link' => 'Lihat Semua Menu',
                        'max_item' => 10
                    ],
                    'tentang_kami' => [
                        'show' => 'true',
                        'title' => 'Mengenal Lebih Dekat',
                        'decription' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.</p>',
                        'title_link' => 'Selengkapnya',
                        'picture' => Picture::find(4)->url
                    ],
                    'news' => [
                        'show' => 'true',
                        'title' => 'News & Update',
                        'decription' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.</p>',
                        'max_item' => 3
                    ],
                    'location' => [
                        'show' => 'true',
                        'title' => 'Lokasi Outlet',
                        'picture' => Picture::find(3)->url
                    ],
                    'kemitraan' => [
                        'show' => 'true',
                        'title' => 'Informasi Kemitraan',
                        'decription' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.</p>',
                        'title_link' => 'Selengkapnya',
                        'max_item' => 3
                    ]
                ]
            ],
            [
                'identity' => 'tentang_kami',
                'name' => 'Mengenal Lebih Dekat',
                'config' => [
                    'meta' =>[
                        'title' => 'meta_title',
                        'content' => 'meta_content',
                        'keyword' => 'meta_keyword'
                    ],
                    'banner' => [
                        'show' => 'true',
                        'title' => 'Mengenal Lebih Dekat',
                        'picture' => Picture::find(4)->url
                    ],
                    'profile' => [
                        'show' => 'true',
                        'title' => 'Mengenal Lebih Dekat',
                        'decription' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.</p>',
                        'picture' => Picture::find(4)->url
                    ],
                    'sejarah' => [
                        'show' => 'true',
                        'title' => 'Sejarah',
                        'decription' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.</p>',
                        'picture' => Picture::find(4)->url
                    ],
                    'visi_misi' => [
                        'show' => 'true',
                        'title' => 'Visi/Misi',
                        'visi_content' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.</p>',
                        'visi_picture' => Picture::find(5)->url,
                        'misi_content' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.</p>',
                        'misi_picture' => Picture::find(6)->url
                    ]
                ]
            ],
            [
                'identity' => 'menu',
                'name' => 'Menu Lazatto',
                'config' => [
                    'meta' =>[
                        'title' => 'meta_title',
                        'content' => 'meta_content',
                        'keyword' => 'meta_keyword'
                    ],
                    'banner' => [
                        'show' => 'true',
                        'title' => 'Menu Lazatto',
                        'picture' => Picture::find(4)->url
                    ],
                    'promo' => [
                        'show' => 'true',
                        'title' => 'Menu Promo',
                        'decription' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.</p>'
                    ],
                    'reguler' => [
                        'show' => 'true',
                        'title' => 'Menu Reguler',
                        'decription' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.</p>'
                    ]
                ]
            ],
            [
                'identity' => 'news',
                'name' => 'News & Update',
                'config' => [
                    'meta' =>[
                        'title' => 'meta_title',
                        'content' => 'meta_content',
                        'keyword' => 'meta_keyword'
                    ],
                    'banner' => [
                        'show' => 'true',
                        'title' => 'News & Update',
                        'picture' => Picture::find(4)->url
                    ],
                    'news' => [
                        'show' => 'true',
                        'title' => 'News & Update'
                    ]
                ]
            ],
            [
                'identity' => 'location',
                'name' => 'Lokasi Outlet',
                'config' => [
                    'meta' =>[
                        'title' => 'meta_title',
                        'content' => 'meta_content',
                        'keyword' => 'meta_keyword'
                    ],
                    'maps' => [
                        'show' => 'true',
                        'title' => 'Lokasi Outlet',
                        'picture' => Picture::find(3)->url
                    ],
                    'information' => [
                        'show' => 'true',
                        'title' => null
                    ]
                ]
            ],
            [
                'identity' => 'contact',
                'name' => 'Contact Us',
                'config' => [
                    'meta' =>[
                        'title' => 'meta_title',
                        'content' => 'meta_content',
                        'keyword' => 'meta_keyword'
                    ],
                    'banner' => [
                        'show' => 'true',
                        'title' => 'Contact Us & Kemitraan',
                        'picture' => Picture::find(4)->url
                    ],
                    'form' => [
                        'show' => 'true',
                        'title' => 'Contact Us',
                        'decription' => '<p><strong>Head Office</strong></p><p>Jl.Lorem Ipsum Dolasr Si, Amet, Nualim Kantra</p><p>Boughna Jyoin Khan</p><p>ph: +72 72816298</p>',
                        'picture' => Picture::find(1)->url
                    ],
                    'kemitraan' => [
                        'show' => 'true',
                        'title' => 'Informasi Kemitraan',
                        'decription' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.</p>'
                    ]
                ]
            ]
        ];

        foreach ($stores as $key => $store) {
            SitePageConfig::create($store);
        }

        $logo = Picture::find(1)->url;

        SitePageConfig::create([
            'identity' => 'site_public_config',
            'name' => 'Site Public Config',
            'config' => [
                'website' => [ 'icon' => $logo],
                'navigasi' => [ 'logo' => $logo],
                'footer' => [
                    'logo' => $logo,
                    'quote' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.</p>',
                    'contact' => '<p><strong>Head Office</strong></p><p>Jl.Lorem Ipsum Dolasr Si, Amet, Nualim Kantra</p><p>Boughna Jyoin Khan</p><p>ph: +72 72816298</p>'
                ]
            ]
        ]);
        
        SitePageConfig::where(['identity' => 'beranda'])->update(['route' => 'beranda']);
        SitePageConfig::where(['identity' => 'tentang_kami'])->update(['route' => 'tentang_kami']);
        SitePageConfig::where(['identity' => 'menu'])->update(['route' => 'menu']);
        SitePageConfig::where(['identity' => 'news'])->update(['route' => 'news']);
        SitePageConfig::where(['identity' => 'location'])->update(['route' => 'location']);
        SitePageConfig::where(['identity' => 'contact'])->update(['route' => 'contact']);

    }
}