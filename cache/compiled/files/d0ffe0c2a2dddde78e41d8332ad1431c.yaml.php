<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/talter/MAMP-Sites/holly-chris-wedding/user/themes/holly-chris-wedding/blueprints/home.yaml',
    'modified' => 1551226776,
    'data' => [
        'title' => 'Homepage Blueprint',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'fields' => [
                                'header.fieldset_hero' => [
                                    'type' => 'fieldset',
                                    'title' => 'Hero Section',
                                    'icon' => 'comments',
                                    'collapsed' => true,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.hero_title' => [
                                            'type' => 'text',
                                            'label' => 'Hero Title'
                                        ],
                                        'header.hero_subtitle' => [
                                            'type' => 'text',
                                            'label' => 'Hero Subtitle'
                                        ],
                                        'header.hero_image' => [
                                            'type' => 'filepicker',
                                            'folder' => '@self',
                                            'preview_images' => true,
                                            'label' => 'Hero Image'
                                        ]
                                    ]
                                ],
                                'header.fieldset_how' => [
                                    'type' => 'fieldset',
                                    'title' => 'How We Met Section',
                                    'icon' => 'comments',
                                    'collapsed' => true,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.how_title' => [
                                            'type' => 'text',
                                            'label' => 'Section Title'
                                        ],
                                        'header.how_image_holly' => [
                                            'type' => 'filepicker',
                                            'folder' => '@self',
                                            'preview_images' => true,
                                            'label' => 'Holly Head Shot'
                                        ],
                                        'header.how_image_chris' => [
                                            'type' => 'filepicker',
                                            'folder' => '@self',
                                            'preview_images' => true,
                                            'label' => 'Chris Head Shot'
                                        ],
                                        'header.how_image_group' => [
                                            'type' => 'filepicker',
                                            'folder' => '@self',
                                            'preview_images' => true,
                                            'label' => 'Group Shot'
                                        ]
                                    ]
                                ],
                                'header.fieldset_details' => [
                                    'type' => 'fieldset',
                                    'title' => 'Wedding Details Section',
                                    'icon' => 'comments',
                                    'collapsed' => true,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.details_title' => [
                                            'type' => 'text',
                                            'label' => 'Section Title'
                                        ],
                                        'header.details_editor' => [
                                            'type' => 'editor',
                                            'label' => 'Wedding Details'
                                        ]
                                    ]
                                ],
                                'header.fieldset_travel' => [
                                    'type' => 'fieldset',
                                    'title' => 'Travel Section',
                                    'icon' => 'comments',
                                    'collapsed' => true,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.travel_title' => [
                                            'type' => 'text',
                                            'label' => 'Section Title'
                                        ],
                                        'header.airports' => [
                                            'name' => 'travel cards',
                                            'type' => 'list',
                                            'style' => 'vertical',
                                            'label' => 'Airports',
                                            'fields' => [
                                                '.code' => [
                                                    'type' => 'text',
                                                    'label' => 'Aiport Code'
                                                ],
                                                '.title' => [
                                                    'type' => 'text',
                                                    'label' => 'Airport Name'
                                                ],
                                                '.summary' => [
                                                    'type' => 'textarea',
                                                    'label' => 'Airport Summary'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'header.fieldset_accomodations' => [
                                    'type' => 'fieldset',
                                    'title' => 'Accomodations Section',
                                    'icon' => 'comments',
                                    'collapsed' => true,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.accomodations_title' => [
                                            'type' => 'text',
                                            'label' => 'Section Title'
                                        ],
                                        'header.hotel_list' => [
                                            'name' => 'hotel cards',
                                            'type' => 'list',
                                            'style' => 'vertical',
                                            'label' => 'Hotels',
                                            'fields' => [
                                                '.title' => [
                                                    'type' => 'text',
                                                    'label' => 'Hotel Name'
                                                ],
                                                '.summary' => [
                                                    'type' => 'textarea',
                                                    'label' => 'Hotel Summary'
                                                ],
                                                '.link' => [
                                                    'type' => 'text',
                                                    'label' => 'Url'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'header.fieldset_activities' => [
                                    'type' => 'fieldset',
                                    'title' => 'Things to Do Section',
                                    'icon' => 'comments',
                                    'collapsed' => true,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.activities_title' => [
                                            'type' => 'text',
                                            'label' => 'Section Title'
                                        ],
                                        'header.activities_list' => [
                                            'name' => 'things to do',
                                            'type' => 'list',
                                            'style' => 'vertical',
                                            'label' => 'Things To Do List',
                                            'fields' => [
                                                '.title' => [
                                                    'type' => 'text',
                                                    'label' => 'Title'
                                                ],
                                                '.summary' => [
                                                    'type' => 'textarea',
                                                    'label' => 'Summary'
                                                ],
                                                '.link' => [
                                                    'type' => 'text',
                                                    'label' => 'Url'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'Image Upload' => [
                                    'type' => 'section',
                                    'title' => 'Upload Images',
                                    'underline' => true,
                                    'fields' => [
                                        'header.images' => [
                                            'type' => 'file',
                                            'label' => NULL,
                                            'multiple' => true,
                                            'destination' => 'self@',
                                            'random_name' => false,
                                            'avoid_overwriting' => false,
                                            'limit' => 20,
                                            'accept' => [
                                                0 => 'image/*'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
