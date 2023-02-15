<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'teamComponents',
        'title' => 'Team Components',
        'style' => 'seamless',
        'fields' => [
            [
                'label' => __('Office Worker', 'flynt'),
                'name' => 'office_worker',
                'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1
            ],
            [
                'label' => __('Designation', 'flynt'),
                'name' => 'designation',
                'type' => 'text',
                // 'visible' => ['office_worker', '==', 1],
                'conditional_logic' => [
                    [
                        [
                            'fieldPath' => 'office_worker',
                            'operator' => '==',
                            'value' => 1
                        ]
                    ]
                ],
            ],
            [
                'label' => __('Company', 'flynt'),
                'name' => 'company',
                'type' => 'text',
                'required' => 0,
                'conditional_logic' => [
                    [
                        [
                            'fieldPath' => 'office_worker',
                            'operator' => '==',
                            'value' => 1
                        ]
                    ]
                ],
            ],
            [
                'label' => __('Twitter', 'flynt'),
                'name' => 'twitter',
                'type' => 'text',
                'required' => 0,
            ],
            [
                'label' => __('Linkedin', 'flynt'),
                'name' => 'linkedin',
                'type' => 'text',
                'required' => 0,
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'team'
                ]
            ]
        ]
    ]);
});
