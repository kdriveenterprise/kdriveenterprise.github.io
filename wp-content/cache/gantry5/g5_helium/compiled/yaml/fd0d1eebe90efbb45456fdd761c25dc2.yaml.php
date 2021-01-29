<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\k-drive/wp-content/themes/g5_helium/custom/particles/element-injector.yaml',
    'modified' => 1602290744,
    'data' => [
        'name' => 'Element Injector',
        'description' => 'Configure Element Injector.',
        'type' => 'atom',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable element injector particles.',
                    'default' => true
                ],
                'cssselector' => [
                    'type' => 'input.text',
                    'description' => 'Enter the CSS Selector for the element that will be injected with another element, for example \'#g-element\'.',
                    'label' => 'CSS Selector',
                    'placeholder' => '#g-element'
                ],
                'html' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Custom HTML',
                    'description' => 'Enter custom HTML into here.',
                    'overridable' => false
                ],
                'twig' => [
                    'type' => 'input.checkbox',
                    'label' => 'Process Twig',
                    'description' => 'Enable Twig template processing in the content. Twig will be processed before shortcodes.',
                    'default' => '0'
                ],
                'filter' => [
                    'type' => 'input.checkbox',
                    'label' => 'Process shortcodes',
                    'description' => 'Enable shortcode processing / filtering in the content.',
                    'default' => '0'
                ]
            ]
        ]
    ]
];
