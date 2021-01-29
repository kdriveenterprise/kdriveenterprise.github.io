<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/k-drive/wp-content/themes/g5_helium/custom/config/_offline/layout.yaml',
    'modified' => 1611628024,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => '_offline',
            'timestamp' => 1468253830
        ],
        'layout' => [
            'navigation' => [
                0 => [
                    0 => 'logo-9608 15',
                    1 => 'spacer-6015 65',
                    2 => 'social-3171 20'
                ]
            ],
            'header' => [
                0 => [
                    0 => 'custom-7185'
                ]
            ],
            '/intro/' => [
                
            ],
            '/features/' => [
                
            ],
            '/utility/' => [
                
            ],
            '/above/' => [
                
            ],
            '/testimonials/' => [
                
            ],
            '/expanded/' => [
                
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'mainbar 75' => [
                            0 => [
                                0 => 'system-content-3997'
                            ],
                            1 => [
                                0 => 'system-messages-9096'
                            ]
                        ]
                    ],
                    1 => [
                        'sidebar 25' => [
                            
                        ]
                    ]
                ]
            ],
            'footer' => [
                0 => [
                    0 => 'logo-9571 10',
                    1 => 'copyright-1736 30',
                    2 => 'spacer-8094 45',
                    3 => 'totop-8670 15'
                ]
            ],
            '/offcanvas/' => [
                
            ]
        ],
        'structure' => [
            'navigation' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes'
                    ]
                ]
            ],
            'header' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes'
                    ]
                ]
            ],
            'intro' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'features' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'utility' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => ''
                ]
            ],
            'above' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'testimonials' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'expanded' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'mainbar' => [
                'type' => 'section',
                'subtype' => 'main',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'block',
                        1 => 'attributes'
                    ]
                ]
            ],
            'sidebar' => [
                'type' => 'section',
                'subtype' => 'aside'
            ],
            'container-main' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'footer' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes'
                    ]
                ]
            ],
            'offcanvas' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ]
        ],
        'content' => [
            'logo-9608' => [
                'title' => 'Logo / Image'
            ],
            'social-3171' => [
                'block' => [
                    'class' => 'g-social-header'
                ]
            ],
            'custom-7185' => [
                'title' => 'Custom HTML',
                'attributes' => [
                    'html' => '<h2 class="g-title">Offline</h2>
<p>Sorry, We are Down for Maintenance.</p>'
                ]
            ],
            'system-content-3997' => [
                'inherit' => [
                    'outline' => 'default',
                    'particle' => 'system-content-1587',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block'
                    ]
                ]
            ],
            'logo-9571' => [
                'title' => 'Logo / Image',
                'attributes' => [
                    'image' => 'gantry-media://logos/K-Drive-Logo-64x64.png'
                ]
            ],
            'copyright-1736' => [
                'inherit' => [
                    'outline' => 'default',
                    'particle' => 'copyright-1736',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block'
                    ]
                ]
            ],
            'totop-8670' => [
                'title' => 'To Top'
            ]
        ]
    ]
];
