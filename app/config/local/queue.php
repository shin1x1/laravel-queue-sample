<?php

return [
    'default' => 'beanstalkd',
    'connections' => [
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'ttr' => 60,
    ],
//    'default' => 'sqs',
//    'connections' => [
//        'sqs' => [
//            'driver' => 'sqs',
//            'key' => getenv('AWS_ACCESS_KEY_ID'),
//            'secret' => getenv('AWS_SECRET_ACCESS_KEY'),
//            'queue' => getenv('AWS_SQS_URL'),
//            'region' => 'ap-northeast-1',
//        ],
//    ],
];
