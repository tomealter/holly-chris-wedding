<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/talter/MAMP-Sites/holly-chris-wedding/user/themes/holly-chris-wedding/blueprints.yaml',
    'modified' => 1550359883,
    'data' => [
        'name' => 'Holly Chris Wedding',
        'version' => '0.1.0',
        'description' => 'A theme for Holly and Chris\' Wedding Website',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Tommy Alter',
            'email' => 'tomealter@gmail.com'
        ],
        'homepage' => 'https://github.com/tommy-alter/grav-theme-holly-chris-wedding',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/tommy-alter/grav-theme-holly-chris-wedding/issues',
        'readme' => 'https://github.com/tommy-alter/grav-theme-holly-chris-wedding/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
