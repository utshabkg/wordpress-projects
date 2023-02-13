<?php

/**
 * Defines field variables to be used across multiple components.
 */

namespace Flynt\FieldVariables;

function getTheme()
{
    return [
        'label' => __('Theme', 'flynt'),
        'name' => 'theme',
        'type' => 'select',
        'allow_null' => 0,
        'multiple' => 0,
        'ui' => 0,
        'ajax' => 0,
        'choices' => [
            '' => __('(none)', 'flynt'),
            'themeLight' => __('Light', 'flynt'),
            'themeDark' => __('Dark', 'flynt'),
            'themeHero' => __('Hero', 'flynt'),
        ]
    ];
}

function getIcon()
{
    return [
        'name' => 'blockIcon',
        'type' => 'group',
        'label' => 'Icon',
        'sub_fields' => [
            [
                'label' => __('Select Icon Library', 'flynt'),
                'type' => 'select',
                'name' => 'icon-library',
                'allow_null' => 'true',
                'choices' => [
                    'feather-icons' => 'Feather Icons',
                    'font-awesome' => 'Font Awesome',
                    'svg-icon' => 'SVG Icon'
                ],
                'required' => 0
            ],
            [
                'label' => __('Icon', 'flynt'),
                'name' => 'icon',
                'type' => 'text',
                'instructions' => __('Enter a valid icon name from <a href="https://feathericons.com">Feather Icons</a> (e.g. `check-circle`).', 'flynt'),
                'required' => 0,
                'conditional_logic' => [
                    [
                        [
                            'fieldPath' => 'icon-library',
                            'operator' => '==',
                            'value' => 'feather-icons'
                        ]
                    ]
                ],
            ],
            [
                'label' => __('Icon FA', 'flynt'),
                'name' => 'iconfa',
                'type' => 'text',
                'instructions' => __('Enter a valid icon name from <a href="https://fontawesome.com">Feather Icons</a> (e.g. `fab fa-500px`).', 'flynt'),
                'required' => 0,
                'conditional_logic' => [
                    [
                        [
                            'fieldPath' => 'icon-library',
                            'operator' => '==',
                            'value' => 'font-awesome'
                        ]
                    ]
                ],
            ],
            [
                'label' => __('Icon SVG', 'flynt'),
                'name' => 'iconsvg',
                'type' => 'image',
                "subtype" => "svg",
                'instructions' => __('Attach a SVG file with 80x80px', 'flynt'),
                'media_upload' => 1,
                'required' => 0,
                'conditional_logic' => [
                    [
                        [
                            'fieldPath' => 'icon-library',
                            'operator' => '==',
                            'value' => 'svg-icon'
                        ]
                    ]
                ],
            ]

        ]
    ];
}

function getSection()
{
    return [
        [
            'label' => __('Section Id', 'flynt'),
            'name' => 'id',
            'type' => 'text',
        ],
        [
            'label' => __('Section Class', 'flynt'),
            'name' => 'class',
            'type' => 'text',
        ],
        [
            'label' => __('Hidden', 'flynt'),
            'name' => 'hidden',
            'type' => 'true_false',
        ]
    ];
}
