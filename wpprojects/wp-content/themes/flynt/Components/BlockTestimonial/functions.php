<?php

namespace Flynt\Components\BlockTestimonial;

use Flynt\FieldVariables;
use Flynt\Utils\Options;

add_filter('Flynt/addComponentData?name=BlockTestimonial', function ($data) {
    $translatableOptions = Options::getTranslatable('SliderOptions');
    $data['jsonData'] = [
        'options' => array_merge($translatableOptions, $data['options']),
    ];
    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'blockTestimonial',
        'label' => __('Block: Testimonial', 'flynt'),
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'title',
                'type' => 'text',
                'delay' => 1,
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
            ],
            [
                'label' => __('Double slash colour', 'flynt'),
                'name' => 'slash_color',
                'type' => 'color_picker',
                'delay' => 1,
            ],
            [
                'label' => __('Testimonials', 'flynt'),
                'name' => 'Testimonials',
                'type' => 'repeater',
                'min' => 1,
                'layout' => 'row',
                'button_label' => __('Add Testimonial', 'flynt'),
                'sub_fields' => [
                    [
                        [
                            'label' => __('Content', 'flynt'),
                            'name' => 'contentHtml',
                            'type' => 'wysiwyg',
                            'delay' => 1,
                            'media_upload' => 0,
                            'required' => 0,
                        ],
                        [
                            'label' => __('Author Image', 'flynt'),
                            'name' => 'image',
                            'type' => 'image',
                            'instructions' => 'Ratio: 90x90',
                        ],
                        [
                            'label' => __('Author', 'flynt'),
                            'name' => 'author',
                            'type' => 'text',
                        ],
                        [
                            'label' => __('Company Name', 'flynt'),
                            'name' => 'company',
                            'type' => 'text',
                        ],
                        [
                            'label' => __('Link', 'flynt'),
                            'name' => 'link',
                            'type' => 'link',
                        ],
                    ],
                ],
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Section Properies', 'flynt'),
                'name' => 'section',
                'type' => 'group',
                'layout' => 'table',
                'sub_fields' => [
                    FieldVariables\getSection()
                ]
            ],

            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'row',
                'sub_fields' => [
                    FieldVariables\getTheme()
                ]
            ],
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'row',
                'sub_fields' => [
                    [
                        'label' => __('Enable Autoplay', 'flynt'),
                        'name' => 'autoplay',
                        'type' => 'true_false',
                        'default_value' => 0,
                        'ui' => 1
                    ],
                    [
                        'label' => __('Autoplay Speed (in milliseconds)', 'flynt'),
                        'name' => 'autoplaySpeed',
                        'type' => 'number',
                        'min' => 2000,
                        'step' => 1,
                        'default_value' => 4000,
                        'required' => 1,
                        'conditional_logic' => [
                            [
                                [
                                    'fieldPath' => 'autoplay',
                                    'operator' => '==',
                                    'value' => 1
                                ]
                            ]
                        ],
                    ]
                ]
            ]
        ]
    ];
}