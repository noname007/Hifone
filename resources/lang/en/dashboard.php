<?php

/*
 * This file is part of Hifone.
 *
 * (c) Hifone.com <hifone@hifone.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    'dashboard' => 'Dashboard',
    'overview'  => [
        'title'       => 'Overview',
        'systemstate' => [
            'title'      => 'Systemstate',
            'statistics' => 'Statistics',
            'modules'    => 'Modules',
            'system'     => 'System',
        ],
        'messages'  => [
            'title'          => 'Messages',
            'newest_threads' => 'Newest Threads',
            'newest_replies' => 'Newest Replies',
            'newest_users'   => 'Newest Users',
        ],
    ],

    'content' => [
        'content'       => 'Content',
        'thread_title'  => 'Thread Title',
        'node'          => 'Node',
        'created_by'    => 'Created by',
        'reply_count'   => 'Reply Count',
        'created_at'    => 'Created at',
        'actions'       => 'Actions',
        'reply'         => 'Reply',
    ],

    'pages' => [
        'pages'   => 'Page',
        'slug'    => 'Slug',
        'title'   => 'Title',
        'body'    => 'Content',
        'add'     => [
            'title'   => 'New Page',
            'success' => 'Page is created successfully.',
        ],
        'edit'     => [
            'title'   => 'Edit Page',
            'success' => 'Page is successfully updated.',
        ],
    ],
    'photos' => [
        'photos' => 'Photo',
    ],
    'threads'  => [
        'threads' => 'Threads',
        'add'     => [
            'title'   => 'New Thread',
            'success' => 'Thread is created successfully.',
        ],
        'edit' => [
            'title'   => 'Edit Thread',
            'success' => 'Thread Information is successfully updated.',
        ],
    ],
    'replies' => [
        'replies' => 'Replies',
        'edit'    => [
            'title' => 'Edit Reply',
        ],
    ],

    'sections' => [
        'sections'     => 'Sections',
        'name'         => 'Name',
        'order'        => 'Order',
        'add'          => [
            'title'   => 'New Section',
            'message' => 'No section',
            'success' => 'Section is created successfully.',
            'failure' => 'Section creation failed.',
        ],
        'edit' => [
            'title'   => 'Edit Section',
            'success' => 'Section Information is successfully updated.',
            'failure' => 'Section update failure.',
        ],
    ],
    'nodes' => [
        'nodes'           => 'Nodes',
        'name'            => 'Name',
        'parent'          => 'Parent Node',
        'root'            => 'Root Node',
        'status_name'     => 'Status',
        'description'     => 'Description',
        'icon'            => 'Node Icon',
        'slug'            => 'Slug',
        'slug_help'       => 'Slug Help',
        'select_category' => 'Select Category',
        'add'             => [
            'title'   => 'New Node',
            'success' => 'Node is created successfully.',
            'failure' => 'Node creation failed',
        ],
        'edit' => [
            'title'   => 'Edit Node',
            'success' => 'Node information is updated.',
            'failure' => 'Node update failure.',
        ],

        'status'       => [
            0 => 'Normal',
            1 => 'Hidden',
            2 => 'Only visible by members',
        ],
    ],

    'adblocks' => [
        'adblocks' => '广告位类型',
        'name'     => '名称',
        'slug'     => '标识',
        'add'      => [
            'title'   => '添加广告位类型',
            'success' => '广告位类型添加成功.',
        ],
        'edit' => [
            'success' => '广告位类型信息更新成功.',
        ],
    ],
    'adspaces' => [
        'adspaces' => '广告位',
        'name'     => '名称',
        'position' => '位置标识',
        'route'    => '投放范围',
        'add'      => [
            'title'   => '添加广告位',
            'success' => '广告位添加成功.',
        ],
        'edit' => [
            'success' => '广告位信息更新成功.',
        ],
    ],

    'advertisements' => [
        'advertisements' => '广告管理',
        'name'           => '广告名称',
        'body'           => '广告内容',
        'add'            => [
            'title'   => '添加广告',
            'success' => '广告添加成功.',
        ],
        'edit' => [
            'success' => '广告信息更新成功.',
        ],
    ],

    'tips' => [
        'tips'        => '小贴士',
        'body'        => '内容',
        'status'      => '是否显示',
        'add'         => [
            'title'   => '添加小贴士',
            'success' => '小提示添加成功.',
            'message' => '当前没有小贴士.',
        ],
        'edit' => [
            'title'   => '编辑小贴士',
            'success' => '小贴士更新成功.',
        ],
        'delete' => [
            'success' => '小贴士已删除。',
            'failure' => 'The tip could not be deleted, please try again.',
        ],
    ],

    'locations' => [
        'locations'        => '热门城市',
        'name'             => '城市名',
        'add'              => [
            'title'   => '添加热门城市',
            'success' => '热门城市添加成功.',
            'message' => '当前没有热门城市.',
        ],
        'edit' => [
            'title'   => '编辑热门城市',
            'success' => '热门城市更新成功.',
        ],
        'delete' => [
            'success' => '热门城市已删除。',
            'failure' => 'The location could not be deleted, please try again.',
        ],
    ],

    'users' => [
        'users'       => '用户管理',
        'user'        => ':email, 注册于 :date',
        'username'    => '用户名',
        'email'       => '邮箱地址',
        'password'    => '密码',
        'description' => '用户列表',
        'search'      => 'Search',
        'roles'       => 'Roles',
        'add'         => [
            'title'   => '注册用户',
            'success' => '用户注册成功.',
            'failure' => '用户注册失败',
        ],
        'edit'     => [
            'title'   => '编辑用户',
            'success' => '用户更新成功.',
        ],
    ],

    'links' => [
        'links'       => '友情链接',
        'title'       => '网站名称',
        'url'         => '网址',
        'cover'       => 'LOGO地址',
        'description' => '描述',
        'status'      => '是否显示',
        'add'         => [
            'title'   => '添加友情链接',
            'success' => '友情链接添加成功.',
            'message' => '当前没有友情链接.',
        ],
        'edit' => [
            'title'   => '编辑友情链接',
            'success' => '友情链接修改成功.',
        ],
        'delete' => [
            'success' => '友情链接已删除。',
            'failure' => 'The link could not be deleted, please try again.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'    => 'Setting',
        'general'     => [
            'general'                      => '网站设置',
            'images-only'                  => 'Only images may be uploaded.',
            'too-big'                      => 'The image you upload is too large. Images should be smaller than :size',
            'site_name'                    => 'Site Name',
            'site_domain'                  => 'Site Domain',
            'site_logo'                    => 'Site logo',
            'site_cdn'                     => 'CDN Address',
            'site_about'                   => 'About Us',
            'captcha_login_disabled'       => 'Disable Captcha for Login',
            'captcha_register_disabled'    => 'Disable Captcha for Registration',
            'logo'                         => 'Logo设置',
            'logo_help'                    => '推荐使用90*40大小的logo.',
        ],
        'localization' => [
            'localization' => '系统语言',
        ],
        'customization' => [
            'customization' => 'Homepage Route',
            'controller'    => 'Controller',
            'method'        => 'Method',
        ],
        'stylesheet' => [
            'stylesheet' => '自定义样式',
            'custom_css' => '自定义样式表',
        ],
        'aboutus' => [
            'aboutus'    => '关于我们',
            'version'    => 'Hifone版本',
            'php'        => '服务器系统及PHP',
            'webserver'  => 'Web服务器',
            'db'         => '数据库',
            'cache'      => '缓存驱动',
            'session'    => 'Session驱动',
            'team'       => '开发团队',
        ],
        'edit' => [
            'success' => 'Settings are updated.',
            'failure' => 'Settings could not be saved.',
        ],
    ],

    // Sidebar footer
    'help'        => '帮助',
    'home'        => '首页',
    'logout'      => '退出',

];
