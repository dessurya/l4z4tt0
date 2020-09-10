<?php

use Illuminate\Database\Seeder;
use App\Model\CmsPageConfig;

class SeederCmsPageConfig extends Seeder
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
                'identity' => 'page_user',
                'config' => [
                    'page' => [
                        'title' => 'User Management',
                        'tabs' => [
                            'id_head' => 'custom-tabs-tab',
                            'id_content' => 'custom-tabs-tabContent',
                            'tab' => [
                                [
                                    'active' => true,
                                    'id' => 'custom-tabs-list-tab',
                                    'href' => 'custom-tabs-list',
                                    'name' => 'List'
                                ],
                                [
                                    'active' => false,
                                    'id' => 'custom-tabs-form-tab',
                                    'href' => 'custom-tabs-form',
                                    'name' => 'Form'
                                ]
                            ]
                        ]
                    ],
                    'dtables' => [
                        'route' => 'cms.user.data',
                        'table_id' => 'asdIT_tables_user',
                        'order' => ['key'=>'name','value'=>'asc'],
                        'componen' => [
                            ['name'=>'Name','data'=>'name','search'=>true,'searchtype'=>'text','order'=>true],
                            ['name'=>'Email','data'=>'email','search'=>true,'searchtype'=>'text','order'=>true],
                            ['name'=>'Created At','data'=>'created_at','search'=>true,'searchtype'=>'date','order'=>true]
                        ],
                        'action' => [
                            ['route'=>'cms.user.reset.password','title'=>'Reset Password User','select'=>true,'confirm'=>true,'multiple'=>true],
                            ['route'=>'cms.user.form.new','title'=>'Add User','select'=>false,'confirm'=>false,'multiple'=>false],
                            ['route'=>'cms.user.form.update','title'=>'Update User','select'=>true,'confirm'=>false,'multiple'=>false],
                            ['route'=>'cms.user.delete','title'=>'Delete User','select'=>true,'confirm'=>true,'multiple'=>true],
                        ]
                    ],
                    'form' => [
                        'id' => 'form_user',
                        'title' => 'Form User',
                        'route' => [
                            'new'=>'cms.user.store.new',
                            'update'=>'cms.user.store.update'
                        ],
                        'disabled' => [],
                        'required' => ['name', 'email']
                    ]
                ]
            ],
            [
                'identity' => 'page_picture',
                'config' => [
                    'page' => [
                        'title' => 'Picture Management',
                        'tabs' => [
                            'id_head' => 'custom-tabs-tab',
                            'id_content' => 'custom-tabs-tabContent',
                            'tab' => [
                                [
                                    'active' => true,
                                    'id' => 'custom-tabs-list-tab',
                                    'href' => 'custom-tabs-list',
                                    'name' => 'List'
                                ],
                                [
                                    'active' => false,
                                    'id' => 'custom-tabs-form-tab',
                                    'href' => 'custom-tabs-form',
                                    'name' => 'Form'
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            [
                'identity' => 'site_page_config',
                'config' => [
                    'page' => [
                        'title' => 'Site Page Management',
                        'tabs' => [
                            'id_head' => 'custom-tabs-tab',
                            'id_content' => 'custom-tabs-tabContent',
                            'tab' => [
                                [
                                    'active' => true,
                                    'id' => 'custom-tabs-list-tab',
                                    'href' => 'custom-tabs-list',
                                    'name' => 'List'
                                ],
                                [
                                    'active' => false,
                                    'id' => 'custom-tabs-form-tab',
                                    'href' => 'custom-tabs-form',
                                    'name' => 'Form'
                                ]
                            ]
                        ]
                    ],
                    'dtables' => [
                        'route' => 'cms.site.page.data',
                        'table_id' => 'asdIT_tables_site_page',
                        'order' => ['key'=>'name','value'=>'asc'],
                        'componen' => [
                            ['name'=>'Name','data'=>'name','search'=>true,'searchtype'=>'text','order'=>true],
                            ['name'=>'Showing Page','data'=>'flag_show','search'=>true,'searchtype'=>'text','order'=>false,"hight_light"=>true,"hight_light_class"=>"bg-success"],
                            ['name'=>'Last Update By','data'=>'last_update_by','search'=>true,'searchtype'=>'text','order'=>false]
                        ],
                        'action' => [
                            ['route'=>'cms.site.page.form','title'=>'Update Page','select'=>true,'confirm'=>false,'multiple'=>false],
                            ['route'=>'cms.site.page.show.or.hide','title'=>'Show Or Hide Page','select'=>true,'confirm'=>true,'multiple'=>true]
                        ]
                    ],
                    'form' => [
                        'id' => 'form_site_page',
                        'title' => 'Form Site Page',
                        'route' => 'cms.site.page.store',
                        'disabled' => [],
                        'required' => []
                    ]
                ]
            ],
            [
                'identity' => 'page_menu',
                'config' => [
                    'page' => [
                        'title' => 'Menu Management',
                        'tabs' => [
                            'id_head' => 'custom-tabs-tab',
                            'id_content' => 'custom-tabs-tabContent',
                            'tab' => [
                                [
                                    'active' => true,
                                    'id' => 'custom-tabs-list-tab',
                                    'href' => 'custom-tabs-list',
                                    'name' => 'List'
                                ],
                                [
                                    'active' => false,
                                    'id' => 'custom-tabs-form-tab',
                                    'href' => 'custom-tabs-form',
                                    'name' => 'Form'
                                ]
                            ]
                        ]
                    ],
                    'dtables' => [
                        'route' => 'cms.menu.data',
                        'table_id' => 'asdIT_tables_menu',
                        'order' => ['key'=>'created_at','value'=>'desc'],
                        'componen' => [
                            ['name'=>'Name','data'=>'name','search'=>true,'searchtype'=>'text','order'=>true],
                            ['name'=>'Menu','data'=>'menu','search'=>true,'searchtype'=>'text','order'=>true,"hight_light"=>true,"hight_light_class"=>"bg-success"],
                            ['name'=>'Show','data'=>'flag_show','search'=>true,'searchtype'=>'text','order'=>true],
                            ['name'=>'Picture','data'=>'picture','search'=>false,'searchtype'=>'text','order'=>false],
                            ['name'=>'Created At','data'=>'created_at','search'=>true,'searchtype'=>'date','order'=>true],
                            ['name'=>'Last Update By','data'=>'last_update_by','search'=>true,'searchtype'=>'text','order'=>false],
                        ],
                        'action' => [
                            ['route'=>'cms.menu.form.new','title'=>'Add Menu','select'=>false,'confirm'=>false,'multiple'=>false],
                            ['route'=>'cms.menu.form.update','title'=>'Update Menu','select'=>true,'confirm'=>false,'multiple'=>false],
                            ['route'=>'cms.menu.flag','title'=>'Show / Hide Menu','select'=>true,'confirm'=>true,'multiple'=>true],
                            ['route'=>'cms.menu.delete','title'=>'Delete Menu','select'=>true,'confirm'=>true,'multiple'=>true],
                        ]
                    ],
                    'form' => [
                        'id' => 'form_menu',
                        'title' => 'Form Menu',
                        'route' => [
                            'new'=>'cms.menu.store.new',
                            'update'=>'cms.menu.store.update'
                        ],
                        'disabled' => [],
                        'required' => ['name', 'menu', 'picture']
                    ]
                ]
            ],
            [
                'identity' => 'page_slider',
                'config' => [
                    'page' => [
                        'title' => 'Slider Management',
                        'tabs' => [
                            'id_head' => 'custom-tabs-tab',
                            'id_content' => 'custom-tabs-tabContent',
                            'tab' => [
                                [
                                    'active' => true,
                                    'id' => 'custom-tabs-list-tab',
                                    'href' => 'custom-tabs-list',
                                    'name' => 'List'
                                ],
                                [
                                    'active' => false,
                                    'id' => 'custom-tabs-form-tab',
                                    'href' => 'custom-tabs-form',
                                    'name' => 'Form'
                                ]
                            ]
                        ]
                    ],
                    'dtables' => [
                        'route' => 'cms.slider.data',
                        'table_id' => 'asdIT_tables_slider',
                        'order' => ['key'=>'created_at','value'=>'desc'],
                        'componen' => [
                            ['name'=>'Name','data'=>'name','search'=>true,'searchtype'=>'text','order'=>true],
                            ['name'=>'Order','data'=>'order','search'=>true,'searchtype'=>'text','order'=>true],
                            ['name'=>'Show','data'=>'flag_show','search'=>true,'searchtype'=>'text','order'=>true],
                            ['name'=>'Picture','data'=>'picture','search'=>false,'searchtype'=>'text','order'=>false],
                            ['name'=>'Created At','data'=>'created_at','search'=>true,'searchtype'=>'date','order'=>true],
                            ['name'=>'Last Update By','data'=>'last_update_by','search'=>true,'searchtype'=>'text','order'=>false],
                        ],
                        'action' => [
                            ['route'=>'cms.slider.form.new','title'=>'Add Slider','select'=>false,'confirm'=>false,'multiple'=>false],
                            ['route'=>'cms.slider.form.update','title'=>'Update Slider','select'=>true,'confirm'=>false,'multiple'=>false],
                            ['route'=>'cms.slider.flag','title'=>'Show / Hide Slider','select'=>true,'confirm'=>true,'multiple'=>true],
                            ['route'=>'cms.slider.delete','title'=>'Delete Slider','select'=>true,'confirm'=>true,'multiple'=>true],
                        ]
                    ],
                    'form' => [
                        'id' => 'form_slider',
                        'title' => 'Form Slider',
                        'route' => [
                            'new'=>'cms.slider.store.new',
                            'update'=>'cms.slider.store.update'
                        ],
                        'disabled' => [],
                        'required' => ['name', 'order', 'picture']
                    ]
                ]
            ],
            [
                'identity' => 'page_kemitraan',
                'config' => [
                    'page' => [
                        'title' => 'Kemitraan Management',
                        'tabs' => [
                            'id_head' => 'custom-tabs-tab',
                            'id_content' => 'custom-tabs-tabContent',
                            'tab' => [
                                [
                                    'active' => true,
                                    'id' => 'custom-tabs-list-tab',
                                    'href' => 'custom-tabs-list',
                                    'name' => 'List'
                                ],
                                [
                                    'active' => false,
                                    'id' => 'custom-tabs-form-tab',
                                    'href' => 'custom-tabs-form',
                                    'name' => 'Form'
                                ]
                            ]
                        ]
                    ],
                    'dtables' => [
                        'route' => 'cms.kemitraan.data',
                        'table_id' => 'asdIT_tables_kemitraan',
                        'order' => ['key'=>'created_at','value'=>'desc'],
                        'componen' => [
                            ['name'=>'Name','data'=>'name','search'=>true,'searchtype'=>'text','order'=>true],
                            ['name'=>'Show','data'=>'flag_show','search'=>true,'searchtype'=>'text','order'=>true],
                            ['name'=>'Picture','data'=>'picture','search'=>false,'searchtype'=>'text','order'=>false],
                            ['name'=>'Created At','data'=>'created_at','search'=>true,'searchtype'=>'date','order'=>true],
                            ['name'=>'Last Update By','data'=>'last_update_by','search'=>true,'searchtype'=>'text','order'=>false],
                        ],
                        'action' => [
                            ['route'=>'cms.kemitraan.form.new','title'=>'Add Kemitraan','select'=>false,'confirm'=>false,'multiple'=>false],
                            ['route'=>'cms.kemitraan.form.update','title'=>'Update Kemitraan','select'=>true,'confirm'=>false,'multiple'=>false],
                            ['route'=>'cms.kemitraan.flag','title'=>'Show / Hide Kemitraan','select'=>true,'confirm'=>true,'multiple'=>true],
                            ['route'=>'cms.kemitraan.delete','title'=>'Delete Kemitraan','select'=>true,'confirm'=>true,'multiple'=>true],
                        ]
                    ],
                    'form' => [
                        'id' => 'form_kemitraan',
                        'title' => 'Form Kemitraan',
                        'route' => [
                            'new'=>'cms.kemitraan.store.new',
                            'update'=>'cms.kemitraan.store.update'
                        ],
                        'disabled' => [],
                        'required' => ['name', 'picture']
                    ]
                ]
            ],
            [
                'identity' => 'page_location',
                'config' => [
                    'page' => [
                        'title' => 'Location Management',
                        'tabs' => [
                            'id_head' => 'custom-tabs-tab',
                            'id_content' => 'custom-tabs-tabContent',
                            'tab' => [
                                [
                                    'active' => true,
                                    'id' => 'custom-tabs-list-tab',
                                    'href' => 'custom-tabs-list',
                                    'name' => 'List'
                                ],
                                [
                                    'active' => false,
                                    'id' => 'custom-tabs-form-tab',
                                    'href' => 'custom-tabs-form',
                                    'name' => 'Form'
                                ]
                            ]
                        ]
                    ],
                    'dtables' => [
                        'route' => 'cms.location.data',
                        'table_id' => 'asdIT_tables_location',
                        'order' => ['key'=>'city','value'=>'asc'],
                        'componen' => [
                            ['name'=>'Name','data'=>'name','search'=>true,'searchtype'=>'text','order'=>true],
                            ['name'=>'City','data'=>'city','search'=>true,'searchtype'=>'text','order'=>true],
                            ['name'=>'Show','data'=>'flag_show','search'=>true,'searchtype'=>'text','order'=>true],
                            ['name'=>'Created At','data'=>'created_at','search'=>true,'searchtype'=>'date','order'=>true],
                            ['name'=>'Last Update By','data'=>'last_update_by','search'=>true,'searchtype'=>'text','order'=>false],
                        ],
                        'action' => [
                            ['route'=>'cms.location.form.new','title'=>'Add Location','select'=>false,'confirm'=>false,'multiple'=>false],
                            ['route'=>'cms.location.form.update','title'=>'Update Location','select'=>true,'confirm'=>false,'multiple'=>false],
                            ['route'=>'cms.location.flag','title'=>'Show / Hide Location','select'=>true,'confirm'=>true,'multiple'=>true],
                            ['route'=>'cms.location.delete','title'=>'Delete Location','select'=>true,'confirm'=>true,'multiple'=>true],
                        ]
                    ],
                    'form' => [
                        'id' => 'form_location',
                        'title' => 'Form Location',
                        'route' => [
                            'new'=>'cms.location.store.new',
                            'update'=>'cms.location.store.update'
                        ],
                        'disabled' => [],
                        'required' => ['name', 'city']
                    ]
                ]
            ],
            [
                'identity' => 'page_news',
                'config' => [
                    'page' => [
                        'title' => 'News Management',
                        'tabs' => [
                            'id_head' => 'custom-tabs-tab',
                            'id_content' => 'custom-tabs-tabContent',
                            'tab' => [
                                [
                                    'active' => true,
                                    'id' => 'custom-tabs-list-tab',
                                    'href' => 'custom-tabs-list',
                                    'name' => 'List'
                                ],
                                [
                                    'active' => false,
                                    'id' => 'custom-tabs-form-tab',
                                    'href' => 'custom-tabs-form',
                                    'name' => 'Form'
                                ]
                            ]
                        ]
                    ],
                    'dtables' => [
                        'route' => 'cms.news.data',
                        'table_id' => 'asdIT_tables_news',
                        'order' => ['key'=>'name','value'=>'asc'],
                        'componen' => [
                            ['name'=>'Name','data'=>'name','search'=>true,'searchtype'=>'text','order'=>true],
                            ['name'=>'Show','data'=>'flag_show','search'=>true,'searchtype'=>'text','order'=>true],
                            ['name'=>'Created At','data'=>'created_at','search'=>true,'searchtype'=>'date','order'=>true],
                            ['name'=>'Last Update By','data'=>'last_update_by','search'=>true,'searchtype'=>'text','order'=>false],
                        ],
                        'action' => [
                            ['route'=>'cms.news.form.new','title'=>'Add News','select'=>false,'confirm'=>false,'multiple'=>false],
                            ['route'=>'cms.news.form.update','title'=>'Update News','select'=>true,'confirm'=>false,'multiple'=>false],
                            ['route'=>'cms.news.flag','title'=>'Show / Hide News','select'=>true,'confirm'=>true,'multiple'=>true],
                            ['route'=>'cms.news.delete','title'=>'Delete News','select'=>true,'confirm'=>true,'multiple'=>true],
                        ]
                    ],
                    'form' => [
                        'id' => 'form_new',
                        'title' => 'Form News',
                        'route' => [
                            'new'=>'cms.news.store.new',
                            'update'=>'cms.news.store.update'
                        ],
                        'disabled' => [],
                        'required' => ['name']
                    ]
                ]
            ],
            [
                'identity' => 'page_inbox',
                'config' => [
                    'page' => [
                        'title' => 'Inbox',
                        'tabs' => [
                            'id_head' => 'custom-tabs-tab',
                            'id_content' => 'custom-tabs-tabContent',
                            'tab' => [
                                [
                                    'active' => true,
                                    'id' => 'custom-tabs-list-tab',
                                    'href' => 'custom-tabs-list',
                                    'name' => 'List'
                                ],
                                [
                                    'active' => false,
                                    'id' => 'custom-tabs-read-tab',
                                    'href' => 'custom-tabs-read',
                                    'name' => 'Read Inbox'
                                ]
                            ]
                        ]
                    ],
                    'dtables' => [
                        'route' => 'cms.inbox.data',
                        'table_id' => 'asdIT_tables_inbox',
                        'order' => ['key'=>'created_at','value'=>'desc'],
                        'componen' => [
                            ['name'=>'Read','data'=>'flag_read','search'=>true,'searchtype'=>'text','order'=>true],
                            ['name'=>'Name','data'=>'name','search'=>true,'searchtype'=>'text','order'=>true],
                            ['name'=>'Email','data'=>'email','search'=>true,'searchtype'=>'text','order'=>true],
                            ['name'=>'Subject','data'=>'subject','search'=>true,'searchtype'=>'text','order'=>true],
                            ['name'=>'Created At','data'=>'created_at','search'=>true,'searchtype'=>'date','order'=>true]
                        ],
                        'action' => [
                            ['route'=>'cms.inbox.read','title'=>'Read Inbox','select'=>true,'confirm'=>false,'multiple'=>false],
                        ]
                    ]
                ]
            ]
        ];

        foreach ($stores as $key => $store) {
            CmsPageConfig::create($store);
        }
    }
}
