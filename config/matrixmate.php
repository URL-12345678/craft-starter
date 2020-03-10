<?php

return [
    'fields' => [
        'hero' => [
            'types' => [
                'hero' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['smallHeading', 'heading', 'text', 'hashtag'],
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundColour', 'backgroundImage', 'backgroundVideo', 'backgroundOverlay'],
                    ]],
                ]
            ]
        ],
        'banner' => [
            'types' => [
                'banner' => [
                    'tabs' => [[
                        'label' => 'Image',
                        'fields' => ['backgroundImage', 'heading'],
                    ], [
                        'label' => 'Video',
                        'fields' => ['backgroundVideo', 'videoAlignment', 'videoHeight'],
                    ], [
                        'label' => 'Settings',
                        'fields' => ['showBanner', 'backgroundColour', 'backgroundOverlay'],
                    ]]
                ]
            ]
        ],
        'projectDetails' => [
            'types' => [
                'project' => [
                    'tabs' => [[
                        'label' => 'Details',
                        'fields' => ['client', 'description', 'websiteUrl'],
                    ],[
                        'label' => 'Thumbnail',
                        'fields' => ['colour', 'clientLogo', 'thumbnailImage', 'thumbnailGif', 'thumbnailBgImage'],
                    ],[
                        'label' => 'Banner',
                        'fields' => ['bannerImage'],
                    ],[
                        'label' => 'Tags',
                        'fields' => ['skills', 'deliverables'],
                    ]]
                ]
            ]
        ],
        'homeBuilder' => [
            'groups' => [[
                'label' => 'Content',
                'types' => ['work', 'clients'],
            ]],
            'hiddenTypes' => [''],
            'types' => [
                'work' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['heading', 'workCards'],
                    ]],
                ],
                'logos' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['text', 'logos'],
                    ]],
                ],
            ],
        ],
        'homeBuilder' => [
            'groups' => [[
                'label' => 'Content',
                'types' => ['richText', 'richTextColumns', 'imageWithText', 'listWithText', 'videoWithText', 'image', 'imageGrid', 'video', 'work', 'logos', 'gallery', 'cta', ],
            ], [
                'label' => 'Misc',
                'types' => ['calendar', 'contactForm', 'anchors', 'resources', 'testimonials', 'quote', 'accordion'],
            ]],
            'hiddenTypes' => [''],
            'types' => [
                'hero' => [  
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['heading', 'summary'],
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundColour', 'backgroundImage', 'backgroundVideo'],
                    ]],
                ],
                'imageWithText' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['imageAsset', 'heading', 'richText', 'textWidth'],
                    ], [
                        'label' => 'Button',
                        'fields' => ['linkUrl', 'linkText']
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundColour', 'backgroundImage', 'backgroundOverlay']
                    ], [
                        'label' => 'Settings',
                        'fields' => ['textColour', 'textPosition', 'verticalPosition', 'horizontalPosition', 'imageRatio', 'full']
                    ]],
                ],
                'quote' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['quote', 'citation'],
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundImage', 'backgroundColour']
                    ], [
                        'label' => 'Overlay',
                        'fields' => ['overlayColour', 'overlayOpacity']
                    ]],
                ],
                'testimonials' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['testimonial'],
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundImage'],
                    ]],
                ],
                'cta' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['heading'],
                    ], [
                        'label' => 'Buttons',
                        'fields' => ['buttonText', 'buttonUrl'],
                    ]],
                ],
                'work' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['heading', 'workCards'],
                    ]],
                ],
                'logos' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['text', 'logos'],
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundColour'],
                    ]],
                ]
            ],
        ],
        'pageBuilder' => [
            'groups' => [[
                'label' => 'Content',
                'types' => ['richText', 'richTextColumns', 'imageWithText', 'listWithText', 'videoWithText', 'image', 'imageGrid', 'video', 'work', 'logos', 'gallery', 'cta', ],
            ], [
                'label' => 'Misc',
                'types' => ['calendar', 'contactForm', 'anchors', 'resources', 'testimonials', 'quote', 'accordion'],
            ]],
            'hiddenTypes' => [''],
            'types' => [
                'text' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['text'],
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundColour', 'backgroundImage', 'backgroundOverlay']
                    ], [
                        'label' => 'Settings',
                        'fields' => ['textWidth', 'textPosition', 'textAlignment'],
                    ]],
                ],
                'textColumns' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['text'],
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundColour', 'backgroundImage', 'backgroundOverlay']
                    ], [
                        'label' => 'Settings',
                        'fields' => ['textColour', 'textAlignment']
                    ]]
                ],
                'imageWithText' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['imageAsset', 'heading', 'richText', 'textWidth'],
                    ], [
                        'label' => 'Button',
                        'fields' => ['linkUrl', 'linkText']
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundColour', 'backgroundImage', 'backgroundOverlay']
                    ], [
                        'label' => 'Settings',
                        'fields' => ['textColour', 'textPosition', 'verticalPosition', 'horizontalPosition', 'imageRatio', 'full']
                    ]],
                ],
                'listWithText' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['list', 'heading', 'richText', 'textWidth'],
                    ], [
                        'label' => 'Button',
                        'fields' => ['linkUrl', 'linkText']
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundColour', 'backgroundImage', 'backgroundOverlay']
                    ], [
                        'label' => 'Settings',
                        'fields' => ['textColour', 'textPosition', 'verticalPosition', 'horizontalPosition', 'imageRatio']
                    ]],
                ],
                'videoWithText' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['video', 'heading', 'richText', 'textWidth'],
                    ], [
                        'label' => 'Button',
                        'fields' => ['linkUrl', 'linkText']
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundColour', 'backgroundImage', 'backgroundOverlay']
                    ], [
                        'label' => 'Settings',
                        'fields' => ['textColour', 'textPosition', 'verticalPosition', 'horizontalPosition', 'imageRatio']
                    ]],
                ],
                'quote' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['quote', 'citation'],
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundImage', 'backgroundColour']
                    ], [
                        'label' => 'Overlay',
                        'fields' => ['overlayColour', 'overlayOpacity']
                    ]],
                ],
                'image' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['image'],
                    ], [
                        'label' => 'Settings',
                        'fields' => ['']
                    ]],
                ],
                'video' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['video'],
                    ], [
                        'label' => 'Settings',
                        'fields' => ['']
                    ]],
                ],
                'gallery' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['gallery'],
                    ], [
                        'label' => 'Settings',
                        'fields' => ['backgroundColour']
                    ]],
                ],
                'resources' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['heading', 'resource'],
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundColour']
                    ]],
                ],
                'location' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['text', 'backgroundImage'],
                    ], [
                        'label' => 'Location Content',
                        'fields' => ['locationsTitle', 'locations'],
                    ]],
                ],
                'pageLinks' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['richText'],
                    ], [
                        'label' => 'Pages',
                        'fields' => ['pageLinks'],
                    ]],
                ],
                'faq' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['accordion'],
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundColour'],
                    ]],
                ],
                'testimonials' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['testimonial'],
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundImage'],
                    ]],
                ],
                'cta' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['heading'],
                    ], [
                        'label' => 'Buttons',
                        'fields' => ['buttonText', 'buttonUrl'],
                    ]],
                ],
                'work' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['heading', 'workCards'],
                    ]],
                ],
                'logos' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['text', 'logos'],
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundColour'],
                    ]],
                ]
            ],
        ],
        'projectBuilder' => [
            'groups' => [[
                'label' => 'Content',
                'types' => ['richText', 'richTextColumns', 'imageWithText', 'listWithText', 'videoWithText', 'image', 'imageGrid', 'video', 'work', 'logos', 'gallery', 'cta', ],
            ], [
                'label' => 'Misc',
                'types' => ['calendar', 'contactForm', 'anchors', 'resources', 'testimonials', 'quote', 'accordion'],
            ]],
            'hiddenTypes' => [''],
            'types' => [
                'richText' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['richText'],
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundColour', 'backgroundImage', 'backgroundOverlay']
                    ], [
                        'label' => 'Settings',
                        'fields' => ['textWidth', 'textPosition', 'textAlignment'],
                    ]],
                ],
                'richTextColumns' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['richText'],
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundColour', 'backgroundImage', 'backgroundOverlay']
                    ], [
                        'label' => 'Settings',
                        'fields' => ['textColour', 'textAlignment']
                    ]]
                ],
                'imageWithText' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['imageAsset', 'heading', 'richText', 'textWidth'],
                    ], [
                        'label' => 'Button',
                        'fields' => ['linkUrl', 'linkText']
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundColour', 'backgroundImage', 'backgroundOverlay']
                    ], [
                        'label' => 'Settings',
                        'fields' => ['textColour', 'textPosition', 'verticalPosition', 'horizontalPosition', 'imageRatio', 'full']
                    ]],
                ],
                'listWithText' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['list', 'heading', 'richText', 'textWidth'],
                    ], [
                        'label' => 'Button',
                        'fields' => ['linkUrl', 'linkText']
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundColour', 'backgroundImage', 'backgroundOverlay']
                    ], [
                        'label' => 'Settings',
                        'fields' => ['textColour', 'textPosition', 'verticalPosition', 'horizontalPosition', 'imageRatio']
                    ]],
                ],
                'videoWithText' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['video', 'heading', 'richText', 'textWidth'],
                    ], [
                        'label' => 'Button',
                        'fields' => ['linkUrl', 'linkText']
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundColour', 'backgroundImage', 'backgroundOverlay']
                    ], [
                        'label' => 'Settings',
                        'fields' => ['textColour', 'textPosition', 'verticalPosition', 'horizontalPosition', 'imageRatio']
                    ]],
                ],
                'quote' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['quote', 'citation'],
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundImage', 'backgroundColour']
                    ], [
                        'label' => 'Overlay',
                        'fields' => ['overlayColour', 'overlayOpacity']
                    ]],
                ],
                'image' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['image'],
                    ], [
                        'label' => 'Settings',
                        'fields' => ['']
                    ]],
                ],
                'video' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['video'],
                    ], [
                        'label' => 'Settings',
                        'fields' => ['']
                    ]],
                ],
                'gallery' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['gallery'],
                    ], [
                        'label' => 'Settings',
                        'fields' => ['backgroundColour']
                    ]],
                ],
                'resources' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['heading', 'resource'],
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundColour']
                    ]],
                ],
                'location' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['text', 'backgroundImage'],
                    ], [
                        'label' => 'Location Content',
                        'fields' => ['locationsTitle', 'locations'],
                    ]],
                ],
                'pageLinks' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['richText'],
                    ], [
                        'label' => 'Pages',
                        'fields' => ['pageLinks'],
                    ]],
                ],
                'faq' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['accordion'],
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundColour'],
                    ]],
                ],
                'testimonials' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['testimonial'],
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundImage'],
                    ]],
                ],
                'cta' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['heading'],
                    ], [
                        'label' => 'Buttons',
                        'fields' => ['buttonText', 'buttonUrl'],
                    ]],
                ],
                'work' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['heading', 'workCards'],
                    ]],
                ],
                'logos' => [
                    'tabs' => [[
                        'label' => 'Content',
                        'fields' => ['text', 'logos'],
                    ], [
                        'label' => 'Background',
                        'fields' => ['backgroundColour'],
                    ]],
                ]
            ],
        ]
    ],
];