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
            ]
        ];

        foreach ($stores as $key => $store) {
            CmsPageConfig::create($store);
        }
    }
}
