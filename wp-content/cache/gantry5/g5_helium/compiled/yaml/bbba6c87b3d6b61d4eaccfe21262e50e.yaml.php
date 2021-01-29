<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/k-drive/wp-content/themes/g5_helium/custom/config/particles/layout.yaml',
    'modified' => 1611628024,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'default',
            'timestamp' => 1468340932
        ],
        'layout' => [
            'navigation' => [
                
            ],
            'header' => [
                
            ],
            'intro' => [
                
            ],
            'features' => [
                
            ],
            'utility' => [
                
            ],
            'above' => [
                
            ],
            'testimonials' => [
                
            ],
            'expanded' => [
                
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'mainbar 75' => [
                            0 => [
                                0 => 'system-content-7663'
                            ],
                            1 => [
                                0 => 'owlcarousel-3850'
                            ],
                            2 => [
                                0 => 'custom-1677'
                            ],
                            3 => [
                                0 => 'contentcubes-4979'
                            ],
                            4 => [
                                0 => 'custom-2628'
                            ],
                            5 => [
                                0 => 'contenttabs-6740'
                            ],
                            6 => [
                                0 => 'custom-2991'
                            ]
                        ]
                    ],
                    1 => [
                        'sidebar 25' => [
                            0 => [
                                0 => 'position-position-5748'
                            ]
                        ]
                    ]
                ]
            ],
            'footer' => [
                
            ],
            'offcanvas' => [
                
            ]
        ],
        'structure' => [
            'navigation' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'header' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'intro' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'features' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'utility' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'above' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'testimonials' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'expanded' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'mainbar' => [
                'type' => 'section',
                'subtype' => 'main',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block'
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
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'offcanvas' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ]
        ],
        'content' => [
            'system-content-7663' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block'
                    ],
                    'particle' => 'system-content-1587'
                ]
            ],
            'owlcarousel-3850' => [
                'title' => 'Owl Carousel',
                'attributes' => [
                    'title' => 'OwlCarousel',
                    'nav' => 'enable',
                    'dots' => 'disable',
                    'autoplay' => 'disable',
                    'items' => [
                        0 => [
                            'image' => 'gantry-media://header/img02.jpg',
                            'title' => 'Owl Carousel',
                            'desc' => 'The Owl Carousel particle features premium functionality from the start.',
                            'link' => '#',
                            'linktext' => 'Click Me',
                            'buttonclass' => 'button-2',
                            'name' => 'Item 1'
                        ],
                        1 => [
                            'image' => 'gantry-media://header/img01.jpg',
                            'title' => 'Owl Carousel',
                            'desc' => 'Set up and deploy a gorgeous carousel in seconds that visitors will love.',
                            'link' => '#',
                            'linktext' => 'Click Me',
                            'buttonclass' => 'button-2',
                            'name' => 'Item 2'
                        ]
                    ]
                ]
            ],
            'custom-1677' => [
                'title' => 'OwlCarousel Description',
                'attributes' => [
                    'html' => '<p>The <strong>Owl Carousel</strong> particle is a simple and elegant particle, based on the open source project of the same name by <a href="http://www.owlcarousel.owlgraphic.com/index.html">Bartosz Wojciechowski</a>, that displays featured information in a modern slider.</p>

<h3>Particle Configuration</h3>
<div align="center"><p><img src="gantry-media://rocketlauncher/pages/particles/content_tabs_1.jpg" /></p></div>
<table>
<thead><tr>
<th align="left">Option</th>
  <th align="left">Description</th>
</tr></thead>
<tbody>
<tr>
<td align="left">CSS Classes</td>
  <td align="left">Sets the CSS class for the content of the particle.</td>
</tr>
<tr>
<td align="left">Title</td>
  <td align="left">Sets the title of the particle, as it will appear on the front end.</td>
</tr>
<tr>
<td align="left">Prev Next</td>
  <td align="left">Enables a previous / next switcher on the front end.</td>
</tr>
<tr>
<td align="left">Dots</td>
  <td align="left">Enables or disables pagination dots.</td>
</tr>
<tr>
<td align="left">Autoplay</td>
  <td align="left">Enables or disables autoplay, allowing the particle to automatically move through items.</td>
</tr>
<tr>
<td align="left">Autoplay Speed</td>
  <td align="left">Sets the speed at which items are automatically progressed in autoplay.</td>
</tr>
<tr>
<td align="left">Image Overlay</td>
  <td align="left">Enables or disables the use of image overlay in the particle.</td>
</tr>
</tbody>
</table>

<h3>Item Configuration</h3>
<div align="center"><p><img src="gantry-media://rocketlauncher/pages/particles/content_tabs_2.jpg" /></p></div>
<table>
<thead><tr>
<th align="left">Option</th>
  <th align="left">Description</th>
</tr></thead>
<tbody>
<tr>
<td align="left">Image</td>
  <td align="left">Enter the path to the image file you wish to use for this item.</td>
</tr>
<tr>
<td align="left">Title</td>
  <td align="left">Enter a title for the item here.</td>
</tr>
<tr>
<td align="left">Description</td>
  <td align="left">Enter a description for the item here.</td>
</tr>
<tr>
<td align="left">Link</td>
  <td align="left">Enter a link for the item here.</td>
</tr>
<tr>
<td align="left">Link Text</td>
  <td align="left">Enter a the text you want to appear as the link for the item here.</td>
</tr>
<tr>
<td align="left">Button Class</td>
  <td align="left">You can enter a button class you wish to use for the link button here.</td>
</tr>
</tbody>
</table>'
                ]
            ],
            'contentcubes-4979' => [
                'title' => 'Content Cubes',
                'attributes' => [
                    'title' => 'Content Cubes',
                    'items' => [
                        0 => [
                            'image' => 'gantry-media://above/img02.jpeg',
                            'imageposition' => 'right',
                            'label' => 'Particle',
                            'title' => 'This is a sample of the Content Cubes particle in Helium theme.',
                            'tags' => [
                                0 => [
                                    'icon' => 'fa fa-tag',
                                    'link' => '#',
                                    'target' => '_self',
                                    'text' => 'gantry'
                                ],
                                1 => [
                                    'icon' => 'fa fa-tag',
                                    'link' => '#',
                                    'target' => '_self',
                                    'text' => 'particle'
                                ],
                                2 => [
                                    'icon' => 'fa fa-tag',
                                    'link' => '#',
                                    'target' => '_self',
                                    'text' => 'cube'
                                ]
                            ],
                            'link' => '#',
                            'linktext' => '&rarr;',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'name' => 'Cube 1'
                        ],
                        1 => [
                            'image' => 'gantry-media://above/img01.jpeg',
                            'imageposition' => 'left',
                            'label' => 'Particle',
                            'title' => 'This is a sample of the Content Cubes particle in Helium theme.',
                            'tags' => [
                                0 => [
                                    'icon' => 'fa fa-tag',
                                    'link' => '#',
                                    'target' => '_self',
                                    'text' => 'grav'
                                ],
                                1 => [
                                    'icon' => 'fa fa-tag',
                                    'link' => '#',
                                    'target' => '_self',
                                    'text' => 'wordpress'
                                ],
                                2 => [
                                    'icon' => 'fa fa-tag',
                                    'link' => '#',
                                    'target' => '_self',
                                    'text' => 'joomla'
                                ]
                            ],
                            'link' => '#',
                            'linktext' => '&rarr;',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'name' => 'Cube 2'
                        ]
                    ]
                ]
            ],
            'custom-2628' => [
                'title' => 'Content Cubes Description',
                'attributes' => [
                    'html' => '<p>The <strong>Content Cubes</strong> particle is a great way to highlight some of your best content in a way that perfectly complements the theme\'s design. This is a natural, and aesthetically-pleasing way to ensure that your featured content stands out.</p>

<h3>Particle Configuration</h3>
<div align="center"><p><img src="gantry-media://rocketlauncher/pages/particles/content_cubes_1.jpg" /></p></div>
<table>
<thead><tr>
<th align="left">Option</th>
  <th align="left">Description</th>
</tr></thead>
<tbody>
<tr>
<td align="left">CSS Classes</td>
  <td align="left">Sets the CSS class for the content of the particle.</td>
</tr>
<tr>
<td align="left">Title</td>
  <td align="left">Sets the title of the particle, as it will appear on the front end.</td>
</tr>
</tbody>
</table>

<h3>Item Configuration</h3>
<div align="center"><p><img src="gantry-media://rocketlauncher/pages/particles/content_cubes_2.jpg" /></p></div>
<table>
<thead><tr>
<th align="left">Option</th>
  <th align="left">Description</th>
</tr></thead>
<tbody>
<tr>
<td align="left">Image</td>
  <td align="left">Enter the path to the image file you wish to use for this item.</td>
</tr>
<tr>
<td align="left">Image Position</td>
  <td align="left">Set whether the image will appear to the left or the right of the text in the item.</td>
</tr>
<tr>
<td align="left">Label</td>
  <td align="left">Enter a label that appears on the top of the title of the item.</td>
</tr>
<tr>
<td align="left">Title</td>
  <td align="left">Enter a title for the item. This appears on the front end.</td>
</tr>
<tr>
<td align="left">Link</td>
  <td align="left">Enter a link that you would like the item to take visitors to when selected.</td>
</tr>
<tr>
<td align="left">Link Text</td>
  <td align="left">Enter any text you would like to have appear as the link.</td>
</tr>
<tr>
<td align="left">Button Class</td>
  <td align="left">Set a class that will apply to the link\'s button for this item in the particle.</td>
</tr>
<tr>
<td align="left">Button Target</td>
  <td align="left">Set the way you would like the link to open. You can choose between <strong>Self</strong> and <strong>New Window</strong>.</td>
</tr>
</tbody>
</table>

<h3>Item Tags Configuration</h3>
<div align="center"><p><img src="gantry-media://rocketlauncher/pages/particles/content_cubes_3.jpg" /></p></div>
<table>
<thead><tr>
<th align="left">Option</th>
  <th align="left">Description</th>
</tr></thead>
<tbody>
<tr>
<td align="left">Tag Name</th>
  <td align="left">The name of the tag becomes the tag\'s name on the front end.</th>
</tr>
<tr>
<td align="left">Tag Icon</td>
  <td align="left">Select a <strong>Font Awesome</strong> icon you would like to appear alongside the tag\'s name on the front end.</td>
</tr>
<tr>
<td align="left">Tag Link</td>
  <td align="left">You can set a specific link that clicking on the tag will take the visitor to, here.</td>
</tr>
</tbody>
</table>'
                ]
            ],
            'contenttabs-6740' => [
                'title' => 'Content Tabs',
                'attributes' => [
                    'title' => 'Content Tabs',
                    'animation' => 'fade',
                    'items' => [
                        0 => [
                            'content' => 'The Content Tab particle is incredibly easy to set up and deploy in your website. You can create a new tab with a single click, name it, and enter its content in plain text or HTML to create a look and feel that meets your needs.',
                            'title' => 'Simple'
                        ],
                        1 => [
                            'content' => 'The Content Tabs particle makes it possible to pack a lot of content into a small space, without sacrificing ease of use. Your visitors can browse between labeled tabs and explore your content without having to scroll through a wall of text.',
                            'title' => 'Efficient'
                        ],
                        2 => [
                            'content' => 'Create as few or as many tabs as you need, apply custom CSS classes, and position this particle wherever you would like it to go. The Content Tabs particle looks as good on a large desktop as it does on a mobile phone.',
                            'title' => 'Flexible'
                        ]
                    ]
                ]
            ],
            'custom-2991' => [
                'title' => 'Content Tabs Description',
                'attributes' => [
                    'html' => '<p>The <strong>Content Tabs</strong> particle enables you to pack a lot of useful information into a compact space that is easy to configure and intuitive to navigate.</p>

<h3>Particle Configuration</h3>
<div align="center"><p><img src="gantry-media://rocketlauncher/pages/particles/content_tabs_1.jpg" /></p></div>
<table>
<thead><tr>
<th align="left">Option</th>
  <th align="left">Description</th>
</tr></thead>
<tbody>
<tr>
<td align="left">CSS Classes</td>
  <td align="left">Sets the CSS class for the content of the particle.</td>
</tr>
<tr>
<td align="left">Animation Type</td>
  <td align="left">Sets the the animation type used when switching between tabs. You can choose between: <strong>Slide Left</strong>, <strong>Slide Right</strong>, <strong>Slide Up</strong>, <strong>Slide Down</strong>, <strong>Fade</strong>, and <strong>Toggle</strong>. </td>
</tr>
</tbody>
</table>

<h3>Item Configuration</h3>
<div align="center"><p><img src="gantry-media://rocketlauncher/pages/particles/content_tabs_2.jpg" /></p></div>
<table>
<thead><tr>
<th align="left">Option</th>
  <th align="left">Description</th>
</tr></thead>
<tbody>
<tr>
<td align="left">Item Name</td>
  <td align="left">The name of the item becomes the title used for the tab on the front end.</td>
</tr>
<tr>
<td align="left">Tab Content</td>
  <td align="left">Enter HTML content you would like to display in your tab as its content body here.</td>
</tr>
</tbody>
</table>'
                ]
            ],
            'position-position-5748' => [
                'title' => 'Sidebar',
                'attributes' => [
                    'key' => 'sidebar'
                ]
            ]
        ]
    ]
];
