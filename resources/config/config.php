<?php
return [
    'height' => [
        'type'     => 'anomaly.field_type.integer',
        'required' => true,
        'config'   => [
            'default_value' => 560,
            'min'           => 100,
            'step'          => 50
        ]
    ],
    'width' => [
        'type'     => 'anomaly.field_type.integer',
        'required' => true,
        'config'   => [
            'default_value' => 315,
            'min'           => 100,
            'step'          => 50
        ]
    ],
    'autoplay' => [
        'type'     => 'anomaly.field_type.boolean',
        'required' => true,
        'config'   => [
            'default_value' => false,
            'on_color'      => 'success',
            'off_color'     => 'danger',
            'on_text'       => 'Yes',
            'off_text'      => 'No'

        ]
    ],
    'fullscreen' => [
        'type'     => 'anomaly.field_type.boolean',
        'required' => true,
        'config'   => [
            'default_value' => false,
            'on_color'      => 'success',
            'off_color'     => 'danger',
            'on_text'       => 'Yes',
            'off_text'      => 'No'

        ]
    ]
];