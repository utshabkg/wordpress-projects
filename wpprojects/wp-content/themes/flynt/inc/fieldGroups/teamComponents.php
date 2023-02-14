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
            ],
            [
                'label' => __('Company', 'flynt'),
                'name' => 'company',
                'type' => 'text',
                'required' => 0,
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
                'type' => 'link',
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
