<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/talter/MAMP-Sites/holly-chris-wedding/user/themes/holly-chris-wedding/blueprints/home.yaml',
    'modified' => 1552843988,
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
                                                ],
                                                '.url' => [
                                                    'type' => 'text',
                                                    'label' => 'Aiport Link'
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
                                                '.price' => [
                                                    'type' => 'text',
                                                    'label' => 'Price ($$)'
                                                ],
                                                '.title' => [
                                                    'type' => 'text',
                                                    'label' => 'Hotel Name'
                                                ],
                                                '.summary' => [
                                                    'type' => 'textarea',
                                                    'label' => 'Hotel Summary'
                                                ],
                                                '.url' => [
                                                    'type' => 'text',
                                                    'label' => 'Url'
                                                ],
                                                '.distance' => [
                                                    'type' => 'text',
                                                    'label' => 'Distance from Venue'
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
                                                '.type' => [
                                                    'type' => 'text',
                                                    'label' => 'Type of Activity'
                                                ],
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
                                'header.fieldset_registry' => [
                                    'type' => 'fieldset',
                                    'title' => 'Registry Section',
                                    'icon' => 'comments',
                                    'collapsed' => true,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.registry_title' => [
                                            'type' => 'text',
                                            'label' => 'Section Title'
                                        ],
                                        'header.registry_zola_url' => [
                                            'type' => 'text',
                                            'label' => 'Zola Url'
                                        ],
                                        'header.registry_cb_url' => [
                                            'type' => 'text',
                                            'label' => 'Crate & Barrel Url'
                                        ],
                                        'header.registry_ws_url' => [
                                            'type' => 'text',
                                            'label' => 'Williams Sonoma Url'
                                        ],
                                        'header.registry_wayfair_url' => [
                                            'type' => 'text',
                                            'label' => 'Wayfair Url'
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
