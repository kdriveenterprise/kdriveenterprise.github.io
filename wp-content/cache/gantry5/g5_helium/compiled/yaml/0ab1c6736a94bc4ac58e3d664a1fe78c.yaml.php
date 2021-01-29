<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\k-drive/wp-content/themes/g5_helium/custom/particles/contentcubes.yaml',
    'modified' => 1602290744,
    'data' => [
        'name' => 'Content Cubes',
        'description' => 'Display content in side-by-side cubes.',
        'type' => 'particle',
        'icon' => 'fa-cube',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable the particle.',
                    'default' => true
                ],
                'css.class' => [
                    'type' => 'input.text',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'placeholder' => 'Enter title'
                ],
                'description' => [
                    'type' => 'input.text',
                    'label' => 'Description',
                    'description' => 'Customize the description text.',
                    'placeholder' => 'Enter description'
                ],
                'column.limit' => [
                    'type' => 'input.text',
                    'label' => 'Number of Columns',
                    'description' => 'Enter the maximum number of columns to display per row.',
                    'default' => 2,
                    'pattern' => '-?\\d{1,2}'
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Content Items',
                    'description' => 'Create each item to display.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.name' => [
                            'type' => 'input.text'
                        ],
                        '.class' => [
                            'type' => 'input.text',
                            'label' => 'CSS Classes',
                            'description' => 'CSS class name for the item.'
                        ],
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image',
                            'description' => 'Select desired image.'
                        ],
                        '.label' => [
                            'type' => 'input.text',
                            'label' => 'Label',
                            'description' => 'Enter the label that appears on top of the title'
                        ],
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title',
                            'description' => 'Enter the title'
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Link',
                            'description' => 'Input the item link.'
                        ],
                        '.linktext' => [
                            'type' => 'input.text',
                            'label' => 'Link Text',
                            'description' => 'Input the text for the item link.',
                            'default' => '&rarr;'
                        ],
                        '.buttonclass' => [
                            'type' => 'input.text',
                            'label' => 'Button Class',
                            'description' => 'Input the button class.',
                            'default' => ''
                        ],
                        '.buttontarget' => [
                            'type' => 'select.selectize',
                            'label' => 'Button Target',
                            'description' => 'Target browser window when item is clicked.',
                            'placeholder' => 'Select...',
                            'default' => '_self',
                            'options' => [
                                '_self' => 'Self',
                                '_blank' => 'New Window'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
