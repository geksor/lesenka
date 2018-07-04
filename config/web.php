<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'name'=>'Лесенка знаний',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],
        'rbac' => [
            'class' => 'mdm\admin\Module',
            'controllerMap' => [
                'assignment' => [
                    'class' => 'mdm\admin\controllers\AssignmentController',
                    /* 'userClassName' => 'app\models\User', */
                    'idField' => 'id',
                    'usernameField' => 'username',
                ],
            ],
            'layout' => 'left-menu',
            'mainLayout' => '@app/modules/admin/views/layouts/main.php',
        ]
    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
            //'personal/*',
            //'admin/*',
            'news/*',
            'aducate/*',
            'cart/*',
            'catalog/*',
            'search/*',
            //'rbac/*',
            'debug/*',
            'gii/*',
        ]
    ],
    'components' => [

        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'sq0NoLwDm0pKZhgaBlFHKnlpLmsDzzP6',
            'baseUrl' => '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'mdm\admin\models\User',
            'loginUrl' => ['admin/user/login'],
            'enableAutoLogin' => true
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@app/mail',
            'htmlLayout' => 'layouts/html',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'mx1.hostinger.ru',
                'username' => 'info@jinmedia.ru',
                'password' => '287092aa',
                'port' => '587',
                //'encryption' => 'ssl',
            ],
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            //'useFileTransport' => false,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/cart' => '/cart',
                '/personal' => '/personal',
                'news/page/<page:\d+>' => 'news/index',
                'news/<id:\d+>' => 'news/show',
                'news' => 'news/index',
                'aducate' => 'aducate/index',
                'aducate/<alias>' => 'aducate/index',
                'aducate/\w+/<alias>' => 'aducate/index',
                'catalog' => 'catalog/index',
                'catalog/<alias>/page/<page:\d+>' => 'catalog/index',
                'catalog/<alias>' => 'catalog/index',
                'catalog/\w+/<alias>' => 'catalog/index',
                'admin' => 'admin/default',
                'rbac' => 'rbac',
                '<action>' => 'site/<action>',
            ],
        ],
    ],
    'params' => $params,
];
$config['language'] = 'ru-RU';
if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
    $config['language'] = 'ru-RU';
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1', '62.122.245.247'],
    ];
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1', '62.122.245.247'],
    ];
}

return $config;
