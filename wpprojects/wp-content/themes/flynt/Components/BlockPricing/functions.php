<?php

namespace Flynt\Components\BlockPricing;

use Flynt\FieldVariables;
use Flynt\Utils\Options;
use Timber\Timber;

function getACFLayout()
{
    return [
        'name' => 'BlockPricing',
        'label' => 'Block: Pricing',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'preContentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual,text',
                'media_upload' => 0,
                'delay' => 1,
                'instructions' => __('Want to add a headline?', 'flynt'),
            ],
            [
                'label' => __('Pricings', 'flynt'),
                'name' => 'Pricings',
                'type' => 'repeater',
                'min' => 1,
                'layout' => 'row',
                'button_label' => __('Add Packages', 'flynt'),
                'sub_fields' => [
                    [
                        [
                            'label' => __('Package', 'flynt'),
                            'name' => 'package',
                            'type' => 'text',
                        ],
                        [
                            'label' => __('Price', 'flynt'),
                            'name' => 'price',
                            'type' => 'text',
                        ],
                        [
                            'label' => __('Monthly Updates', 'flynt'),
                            'name' => 'monthly_updates',
                            'type' => 'true_false',
                        ],
                        [
                            'label' => __('Disk Space', 'flynt'),
                            'name' => 'disk_space',
                            'type' => 'text',
                        ],
                        [
                            'label' => __('Email Accounts', 'flynt'),
                            'name' => 'email_accounts',
                            'type' => 'text',
                        ],
                        [
                            'label' => __('Domains', 'flynt'),
                            'name' => 'domains',
                            'type' => 'text',
                        ],
                        [
                            'label' => __('Sub Domains', 'flynt'),
                            'name' => 'sub_domains',
                            'type' => 'text',
                        ],
                        [
                            'label' => __('Custom Domains', 'flynt'),
                            'name' => 'custom_domains',
                            'type' => 'true_false',
                        ],
                        [
                            'label' => __('Technical Support', 'flynt'),
                            'name' => 'technical_support',
                            'type' => 'true_false',
                        ],
                        [
                            'label' => __('Monthly Bandwidth', 'flynt'),
                            'name' => 'monthly_bandwidth',
                            'type' => 'text',
                        ],
                        // [
                        //     'label' => __('Features', 'flynt'),
                        //     'name' => 'features',
                        //     'type' => 'repeater',
                        //     'min' => 1,
                        //     'layout' => 'row',
                        //     'button_label' => __('Add Features', 'flynt'),
                        //     'sub_label' => [
                        //         [
                        //             [
                        //                 'label' => __('Feature', 'flynt'),
                        //                 'name' => 'feature',
                        //                 'type' => 'text',
                        //             ],
                        //         ],
                        //     ],
                        // ],
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
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'row',
                'sub_fields' => [
                    FieldVariables\getTheme(),
                    [
                        'label' => __('Columns', 'flynt'),
                        'name' => 'columns',
                        'type' => 'number',
                        'default_value' => 3,
                        'min' => 1,
                        'max' => 3,
                        'step' => 1
                    ]
                ]
            ],
        ]
    ];
}
