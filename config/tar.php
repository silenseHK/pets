<?php

    return[

        'tar' => [
            [
                'title' => '首页',
                'url'   => '/admin/index',
                'child' => []
            ],
            [
                'title' => '分类管理',
                'url'   => 'javascript:;',
                'child' => [
                    [
                        'title' => '分类列表',
                        'url'   => '/admin/cate/index',
                        'child' => []
                    ],
//                    [
//                        'title' => '添加分类',
//                        'url'   => '/admin/cate/add',
//                        'child' => []
//                    ],
                ]
            ],
            [

                'title' => '文章管理',
                'url'   => 'javascript:;',
                'child' => [
                    [
                        'title' => '文章列表',
                        'url'   => '/admin/article/index',
                        'child' => []
                    ]
                ]
            ],
            [

                'title' => '管理员管理',
                'url'   => 'javascript:;',
                'child' => [
                    [
                        'title' => '管理员列表',
                        'url'   => '/admin/admin/index',
                        'child' => []
                    ]
                ]
            ]
        ]



    ];