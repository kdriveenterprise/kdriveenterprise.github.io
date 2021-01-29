<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1602990455,
    'checksum' => '4581618762a36050290caba5b3278b19',
    'files' => [
        'wp-content/themes/g5_helium/custom/config/home_-_particles' => [
            'assignments' => [
                'file' => 'wp-content/themes/g5_helium/custom/config/home_-_particles/assignments.yaml',
                'modified' => 1599523634
            ],
            'index' => [
                'file' => 'wp-content/themes/g5_helium/custom/config/home_-_particles/index.yaml',
                'modified' => 1602910945
            ],
            'layout' => [
                'file' => 'wp-content/themes/g5_helium/custom/config/home_-_particles/layout.yaml',
                'modified' => 1602910945
            ]
        ]
    ],
    'data' => [
        'assignments' => [
            'context' => [
                0 => [
                    'is_front_page' => true
                ]
            ]
        ],
        'index' => [
            'name' => 'home_-_particles',
            'timestamp' => 1602910945,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'custom_-_home_-_particles',
                'timestamp' => 1602908648
            ],
            'positions' => [
                
            ],
            'sections' => [
                'above' => 'Above',
                'navigation' => 'Navigation',
                'intro' => 'Intro',
                'utility' => 'Utility',
                'testimonials' => 'Testimonials',
                'features' => 'Features',
                'expanded' => 'Expanded',
                'header' => 'Header',
                'mainbar' => 'Mainbar',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'menu' => [
                    'menu-7108' => 'Menu'
                ],
                'logo' => [
                    'logo-1148' => 'Logo / Image'
                ],
                'slideshow' => [
                    'slideshow-8510' => 'Slideshow'
                ],
                'custom' => [
                    'custom-5807' => 'Intro',
                    'custom-6355' => 'Develop CMS themes quickly',
                    'custom-3119' => 'Features'
                ],
                'contenttabs' => [
                    'contenttabs-3854' => 'Content Tabs'
                ],
                'copyright' => [
                    'copyright-4467' => 'Copyright'
                ],
                'horizontalmenu' => [
                    'horizontalmenu-9920' => 'Horizontal Menu'
                ],
                'mobile-menu' => [
                    'mobile-menu-4401' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'navigation' => 'navigation',
                    'menu-7108' => 'menu-6409',
                    'logo-1148' => 'logo-4018',
                    'footer' => 'footer',
                    'copyright-4467' => 'copyright-1736',
                    'horizontalmenu-9920' => 'horizontalmenu-9034',
                    'offcanvas' => 'offcanvas',
                    'mobile-menu-4401' => 'mobile-menu-5697'
                ]
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'custom_-_home_-_particles',
                'timestamp' => 1602908648
            ],
            'layout' => [
                '/above/' => [
                    
                ],
                'navigation' => [
                    
                ],
                '/intro/' => [
                    0 => [
                        0 => 'slideshow-8510'
                    ]
                ],
                '/header/' => [
                    0 => [
                        0 => 'custom-5807'
                    ]
                ],
                '/utility/' => [
                    0 => [
                        0 => 'contenttabs-3854'
                    ]
                ],
                '/testimonials/' => [
                    0 => [
                        0 => 'custom-6355'
                    ]
                ],
                '/features/' => [
                    0 => [
                        0 => 'custom-3119'
                    ]
                ],
                '/container-main/' => [
                    0 => [
                        0 => [
                            'mainbar' => [
                                
                            ]
                        ]
                    ]
                ],
                '/expanded/' => [
                    
                ],
                'footer' => [
                    
                ],
                'offcanvas' => [
                    
                ]
            ],
            'structure' => [
                'above' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'g-flushed'
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'children'
                        ]
                    ]
                ],
                'intro' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'g-flushed'
                    ]
                ],
                'header' => [
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'g-flushed wow fadeIn',
                        'variations' => ''
                    ]
                ],
                'utility' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'g-flushed wow fadeIn',
                        'variations' => ''
                    ]
                ],
                'testimonials' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'wow fadeIn',
                        'variations' => ''
                    ]
                ],
                'features' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'wow fadeIn',
                        'variations' => ''
                    ]
                ],
                'mainbar' => [
                    'type' => 'section',
                    'subtype' => 'main'
                ],
                'container-main' => [
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
                'footer' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'children',
                            1 => 'attributes'
                        ]
                    ]
                ],
                'offcanvas' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'children'
                        ]
                    ]
                ]
            ],
            'content' => [
                'slideshow-8510' => [
                    'attributes' => [
                        'items' => [
                            0 => [
                                'image' => 'gantry-media://slideshow/intro-1.jpg',
                                'videoiframe' => '',
                                'alt' => '',
                                'title' => '',
                                'link' => '',
                                'target' => '_parent',
                                'description' => '',
                                'buttons' => [
                                    
                                ],
                                'overlaystyle' => 'style1',
                                'overlaycontainer' => '0',
                                'overlayposition' => 'bottom',
                                'overlayanimation' => 'fade',
                                'overlaywidth' => 'auto',
                                'class' => '',
                                'name' => 'Item #1'
                            ],
                            1 => [
                                'image' => 'gantry-media://slideshow/intro-2.jpg',
                                'videoiframe' => '',
                                'alt' => '',
                                'title' => '',
                                'link' => '',
                                'target' => '_parent',
                                'description' => '',
                                'buttons' => [
                                    
                                ],
                                'overlaystyle' => 'style1',
                                'overlaycontainer' => '0',
                                'overlayposition' => 'bottom',
                                'overlayanimation' => 'fade',
                                'overlaywidth' => 'auto',
                                'class' => '',
                                'name' => 'Item #2'
                            ]
                        ]
                    ]
                ],
                'custom-5807' => [
                    'title' => 'Intro',
                    'attributes' => [
                        'html' => '<div class="fp-intro">
    <h2 class="g-title">Build your beautiful theme, the way you want it, with Helium</h2>
    <p>Craft memorable, emotive experiences with our Gantry 5 framework.</p>
    <div class="ipad-mockup">
        <img src="gantry-media://intro/mockup.png" alt="" />
    </div>
</div>'
                    ],
                    'block' => [
                        'variations' => 'center'
                    ]
                ],
                'contenttabs-3854' => [
                    'title' => 'Content Tabs',
                    'attributes' => [
                        'items' => [
                            0 => [
                                'content' => '<p>Gantry 5 includes a new, powerful Menu editor that makes menu organization,
particle and module injection, and visual enhancements a breeze. Here are just
a handful of things you can do with Gantry 5’s powerful Menu Editor.</p>
<div class="g-grid size-100">
    <div class="g-block size-50">
        <ul>
            <li>
                FontAwesome Icons
            </li>
            <li>
                Easy Module Injection
            </li>
            <li>
                Simple Particle Injection
            </li>
            <li>
                Drag-and-drop Functionality
            </li>
            <li>
                Per-item CSS Classes
            </li>
            <li>
                Submenu Column Control
            </li>
        </ul>
    </div>
    <div class="g-block size-50">
        <ul>
            <li>
                Easy Organization / Reordering
            </li>
            <li>
                Link Target Designation
            </li>
            <li>
                Multiple Dropdown Styles
            </li>
            <li>
                Per-item Image Support
            </li>
            <li>
                Subtitles
            </li>
            <li>
                Non-destructive
            </li>
        </ul>
    </div>
</div>
<div class="g-grid">
    <div class="g-block size-100">
        Find out more about using the Menu Editor in our <a href="http://docs.gantry.org/gantry5/configure/menu-editor">documentation</a>.
    </div>
</div>',
                                'title' => 'Menu Editor'
                            ],
                            1 => [
                                'content' => '<p>The Layout Manager makes it easier than ever to arrange and customize your users’ experience with drag-and-drop simplicity from start to finish. A handful of the many features found in the Layout Manager are listed below.</p>
<div class="g-grid size-100">
    <div class="g-block size-50">
        <ul>
            <li>Drag-and-drop Functionality</li>
            <li>Unlimited Items Per Row</li>
            <li>Unlimited Rows Per Section</li>
            <li>Easy Widget Position Placement</li>
            <li>Resize Items with Simple Sliders</li>
            <li>Per-section CSS Classes and Tag Attributes</li>
        </ul>
    </div>
    <div class="g-block size-50">
        <ul>
            <li>Per-block CSS Classes, Variations, and Tag Attributes</li>
            <li>Quick Preset Loading</li>
            <li>Undo and Redo</li>
            <li>Access to Easy-to-use Particles</li>
            <li>Intuitive Visual Interface</li>
            <li>Touch-screen Friendly</li>
        </ul>
    </div>
</div>
<div>Find out more about using the Layout Manager in our <a href="http://docs.gantry.org/gantry5/configure/layout-manager">documentation</a>.</div>',
                                'title' => 'Layout Manager'
                            ]
                        ]
                    ]
                ],
                'custom-6355' => [
                    'title' => 'Develop CMS themes quickly',
                    'attributes' => [
                        'html' => '<div class="fp-multi-column-text">
    <h2 class="g-title">Develop CMS themes quickly and efficiently</h2>
    <div class="g-grid">
        <div class="g-block size-50">
            <p>
                Helium was crafted with love by the <a href="http://rockettheme.com">RocketTheme</a> team to showcase the capabilities of the Gantry 5 framework. Helium is open source and available for free under a dual license system (<a href="http://www.opensource.org/licenses/mit-license.php">MIT</a> or <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.html">GPL version 2 or later</a>). You do not have to keep the Gantry or RocketTheme links and logos in the front end, however, you must ensure that all copyright notices in the code are retained.
            </p>
        </div>
        <div class="g-block size-50">
            <p>
                Documentation for Gantry 5 is available on the <a href="http://docs.gantry.org">official Gantry website</a>. You can submit any issues or feature requests for Gantry through <a href="http://github.com/gantry/gantry5">GitHub</a>. A chat room has been set up using <a href="https://gitter.im/gantry/gantry5">Gitter</a> where you can go to talk about the project with developers, contributors, and other members of the community. This is the best place to go to get quick tips and discuss features with others.
            </p>
        </div>
    </div>
</div>'
                    ],
                    'block' => [
                        'variations' => 'title-center'
                    ]
                ],
                'custom-3119' => [
                    'title' => 'Features',
                    'attributes' => [
                        'html' => '<div class="fp-features">
    <div class="g-grid">
        <div class="g-block size-33-3">
            <div class="card">
                <div class="card-block">
                    <i class="fa fa-joomla"></i>
                    <h4 class="card-title">Joomla</h4>
                    <p class="card-text">Bring your website to life with one of the most powerful and popular theming frameworks for Joomla.</p>
                </div>
            </div>
        </div>
        <div class="g-block size-33-3">
            <div class="card">
                <div class="card-block">
                    <i class="fa fa-wordpress"></i>
                    <h4 class="card-title">WordPress</h4>
                    <p class="card-text">Gantry extends WordPress\' native functionality, empowering users to manipulate virtually every aspect of their visitors\' experience.</p>
                </div>
            </div>
        </div>
        <div class="g-block size-33-3">
            <div class="card">
                <div class="card-block">
                    <i class="fa fa-grav"></i>
                    <h4 class="card-title">Grav</h4>
                    <p class="card-text">Gantry 5 is the first theming framework for Grav, designed by members of the same team that developed the CMS.</p>
                </div>
            </div>
        </div>
    </div>
</div>'
                    ],
                    'block' => [
                        'variations' => 'center'
                    ]
                ]
            ]
        ]
    ]
];
