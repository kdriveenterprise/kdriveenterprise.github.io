<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\k-drive/wp-content/themes/g5_helium/blueprints/content/blog/featured-image.yaml',
    'modified' => 1599523626,
    'data' => [
        'name' => 'Featured Image',
        'description' => 'Options for displaying featured image',
        'type' => 'blog',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Display featured image on blog page.',
                    'default' => 1
                ],
                'width' => [
                    'type' => 'input.text',
                    'label' => 'Image Width',
                    'description' => 'Image width in pixels.',
                    'default' => 1200
                ],
                'height' => [
                    'type' => 'input.text',
                    'label' => 'Image Height',
                    'description' => 'Image height in pixels.',
                    'default' => 350
                ],
                'position' => [
                    'type' => 'select.select',
                    'label' => 'Image Position',
                    'description' => 'Choose if the image should be aligned to left, right or none.',
                    'default' => 'none',
                    'options' => [
                        'left' => 'Left',
                        'right' => 'Right',
                        'none' => 'None'
                    ]
                ]
            ]
        ]
    ]
];
