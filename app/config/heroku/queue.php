<?php

return [
    'default' => 'iron',
    'connections' => [
        'iron' => array(
            'driver' => 'iron',
            'host' => 'mq-aws-us-east-1.iron.io',
            'token' =>  getenv('IRON_MQ_TOKEN'),
            'project' => getenv('IRON_MQ_PROJECT_ID'),
            'queue' => 'sample',
            'encrypt' => true,
        ),
    ],
];
