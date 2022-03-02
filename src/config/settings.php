<?php 

return [
    'standard' => [
        'title' => 'Standard Setting',
        'short_desc' => 'text text text text text text ...',
        'icon' => 'bxs-widget',
        'form' => [
            'lang' => [
                'inputs' => [
                    [
                        'label'         => 'Site Name',
                        'name'          => 'name',
                        'placeholder'   => 'Enter Site Name',
                        'type'          => 'text',
                    ],
                    [
                        'label'         => 'Footer Description',
                        'name'          => 'footer_description',
                        'placeholder'   => 'Enter Footer Description',
                        'type'          => 'textarea',
                    ],
                ]
            ],
            'inputs' => [
                [
                    'label'         => 'Phone',
                    'name'          => 'phone',
                    'type'          => 'text',
                    'placeholder'   => 'Enter Phone',
                ],
                [
                    'label'         => 'Email',
                    'name'          => 'email',
                    'type'          => 'email',
                    'placeholder'   => 'Enter Email',
                ],
                [
                    'label'         => 'Website logo',
                    'name'          => 'website_logo',
                    'type'          => 'image',
                ],
                [
                    'label'         => 'Footer image',
                    'name'          => 'footer_image',
                    'type'          => 'image',
                ],
                [
                    'label'         => 'fav image',
                    'name'          => 'fav_image',
                    'type'          => 'image',
                ],
            ],
        ],
    ],
    'social' => [
        'title' => 'Social',
        'short_desc' => 'text text text text text text ...',
        'icon' => 'bxs-show',
        'form' => [
            'inputs' => [
                [
                    'label'         => 'Facebook',
                    'name'          => 'facebook',
                    'type'          => 'url',
                    'placeholder'   => 'Enter Fackbook Link',
                ],
                [
                    'label'         => 'Twitter',
                    'name'          => 'twitter',
                    'type'          => 'url',
                    'placeholder'   => 'Enter Twitter Link',
                ],
                [
                    'label'         => 'Linkedin',
                    'name'          => 'linkedin',
                    'type'          => 'url',
                    'placeholder'   => 'Enter Linkedin Link',
                ],
                [
                    'label'         => 'Youtube',
                    'name'          => 'youtube',
                    'type'          => 'url',
                    'placeholder'   => 'Enter Youtube Link',
                ],
            ]
        ],
    ],
];