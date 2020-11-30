<?php
return [

    [
        'name' => 'Dashboard',
        'route' => 'admin-dashboard',
        'icon' => 'fa fa-dashboard'
    ],

    [
        'name' => 'Company Info',
        'route' => 'company-info',
        'icon' => 'fa fa-phone'
    ],

    [
        'name' => 'About',
        'route' => 'about-add',
        'icon' => 'fa fa-home'

    ],

    [
        'name' => 'Blog Section',
        'icon' => 'fa fa-newspaper-o',
        'sub_nav' => [
            [
                'name' => 'Add Category',
                'route' => 'category-add',

            ],

            [
                'name' => 'Add Content',
                'route' => 'category-content'

            ],
        ]
    ],

    [
        'name' => 'Gallery',
        'icon' => 'fa fa-picture-o',
        'sub_nav' => [
            [
                'name' => 'Add Gallery',
                'route' => 'galleries',
            ],

/*            [
                'name' => 'Add Video',
                'route' => ''

            ],*/

        ],
    ],

    ['name' => 'Advertisement',
        'route' => 'advertisement',
        'icon' => 'fa fa-adn'
    ],

/*    [
        'name' => 'Career',
        'route' => '',
        'icon' => 'fa fa-graduation-cap'
    ],*/

    [
        'name' => 'Contact Messages',
        'route' => 'contact-message',
        'icon' => 'fa fa-envelope',
    ],
    [
        'name' => 'Comment',
        'route' => 'comment-add',
        'icon' => 'fa fa-envelope',
    ],
    [
        'name' => 'Videos',
        'route' => 'video',
        'icon' => 'fa fa-envelope',
    ]

];
