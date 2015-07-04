<?php

return [
    'id' => 'yii2-dashboard-console',
    'basePath' => dirname(__DIR__),
    'aliases' => [
        '@vendor' => VENDOR_DIR,
        '@cornernote/dashboard' => realpath(__DIR__ . '../../../../src'),
    ],
    'params' => [
        'supportEmail' => 'errors@example.com',
    ],
    'components' => [
        'cache' => null,
        'db' => require __DIR__ . '/db.php',
        'log' => [
            'traceLevel' => getenv('YII_TRACE_LEVEL'),
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning', 'info'],
                    'logFile' => '@app/runtime/logs/console.log',
                    'dirMode' => 0777
                ],
            ],
        ],
        'urlManager' => [
            'scriptUrl' => 'http://example.com/',
        ],
    ],
    'modules' => [
        'dashboard' => [
            'class' => 'cornernote\dashboard\Module',
        ],
    ],
];