<?php

use Illuminate\Database\Seeder;
use App\Model\SitePageConfig;

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
                        'show' => true,
                        'max_item' => 3
                    ],
                    'menu_lazatto' => [
                        'show' => true,
                        'title' => 'Menu Lazzato',
                        'decription' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.</p>',
                        'title_link' => 'Lihat Semua Menu',
                        'max_item' => 10
                    ],
                    'tentang_kami' => [
                        'show' => true,
                        'title' => 'Mengenal Lebih Dekat',
                        'decription' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.</p>',
                        'title_link' => 'Selengkapnya',
                        'picture' => null
                    ],
                    'news' => [
                        'show' => true,
                        'title' => 'News & Update',
                        'decription' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.</p>',
                        'max_item' => 3
                    ],
                    'location' => [
                        'show' => true,
                        'title' => 'News & Update',
                        'picture' => null
                    ],
                    'kemitraan' => [
                        'show' => true,
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
                        'show' => true,
                        'title' => 'Mengenal Lebih Dekat',
                        'picture' => null
                    ],
                    'profile' => [
                        'show' => true,
                        'title' => 'Mengenal Lebih Dekat',
                        'decription' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.</p>',
                        'picture' => null
                    ],
                    'profile' => [
                        'show' => true,
                        'title' => 'Sejarah',
                        'content' => [
                            ['title' => 'title 1', 'value' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.' ],
                            ['title' => 'title 2', 'value' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.' ],
                            ['title' => 'title 3', 'value' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.' ],
                            ['title' => 'title 4', 'value' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.' ],
                            ['title' => 'title 5', 'value' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.' ],
                            ['title' => 'title 6', 'value' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.' ],
                            ['title' => 'title 7', 'value' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.' ]
                        ],
                        'picture' => []
                    ],
                    'visi_misi' => [
                        'show' => true,
                        'title' => 'Visi/Misi',
                        'visi_content' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.</p>',
                        'visi_picture' => null,
                        'misi_content' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.</p>',
                        'misi_picture' => null
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
                        'show' => true,
                        'title' => 'Menu Lazatto',
                        'picture' => null
                    ],
                    'promo' => [
                        'show' => true,
                        'title' => 'Menu Promo',
                        'decription' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.</p>'
                    ],
                    'reguler' => [
                        'show' => true,
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
                        'show' => true,
                        'title' => 'News & Update',
                        'picture' => null
                    ],
                    'news' => [
                        'show' => true,
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
                        'show' => true,
                        'title' => 'Lokasi Outlet',
                        'picture' => null
                    ],
                    'information' => [
                        'show' => true,
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
                        'show' => true,
                        'title' => 'Contact Us & Kemitraan',
                        'picture' => null
                    ],
                    'form' => [
                        'show' => true,
                        'title' => 'Contact Us',
                        'content' => '<p><strong>Head Office</strong></p><p>Jl.Lorem Ipsum Dolasr Si, Amet, Nualim Kantra</p><p>Boughna Jyoin Khan</p><p>ph: +72 72816298</p>',
                        'picture' => null
                    ],
                    'kemitraan' => [
                        'show' => true,
                        'title' => 'Informasi Kemitraan',
                        'decription' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit earum vel quaerat iure laudantium nobis nesciunt repellat, a tempora deleniti cupiditate facere magni libero ab impedit harum facilis. Accusantium, consectetur.</p>'
                    ]
                ]
            ]
        ];

        foreach ($stores as $key => $store) {
            SitePageConfig::create($store);
        }
    }
}