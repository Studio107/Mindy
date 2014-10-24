<?php

use Mindy\Helper\Params;

return [
    'basePath' => dirname(__FILE__) . '/../',
    'name' => 'Mindy',
    'behaviors' => [
        'ParamsCollectionBehavior' => [
            'class' => '\Mindy\Base\ParamsCollectionBehavior'
        ],
    ],
    'managers' => [
        'qwe@qwe.com'
    ],
    'locale' => [
        'language' => 'en',
        'sourceLanguage' => 'en',
        'charset' => 'utf-8',
    ],
    'components' => [
        'middleware' => [
            'class' => '\Mindy\Middleware\MiddlewareManager',
            'middleware' => [
                'CurrentSiteMiddleware' => [
                    'class' => '\Modules\Sites\Middleware\CurrentSiteMiddleware'
                ],
                'RedirectMiddleware' => [
                    'class' => '\Modules\Redirect\Middleware\RedirectMiddleware'
                ],
            ]
        ],

        'signal' => [
            'class' => '\Mindy\Event\EventManager',
            'events' => dirname(__FILE__) . DIRECTORY_SEPARATOR . 'events.php',
        ],

        'db' => [
            'class' => '\Mindy\Query\ConnectionManager',
            'databases' => [
                'default' => [
                    'class' => '\Mindy\Query\Connection',
                    'dsn' => 'mysql:host=192.168.2.2;dbname=c225_0',
                    'username' => 'c225_0',
                    'password' => '9gCUFFBxjvbdZN',
                    'charset' => 'utf8',
                ]
            ]
        ],
        'permissions' => [
            'class' => '\Modules\User\Components\Permissions'
        ],
        'mail' => [
            'class' => '\Modules\Mail\Components\DbMailer',
        ],
        'finder' => [
            'class' => '\Mindy\Finder\FinderFactory',
        ],
        'authManager' => [
            'class' => '\Modules\User\Components\Permissions\PermissionManager',
        ],
        'authGenerator' => [
            'class' => 'MPermissionGenerator'
        ],
        'request' => [
            'class' => '\Mindy\Http\Request',
            'enableCsrfValidation' => false
        ],
        'auth' => [
            'class' => '\Modules\User\Components\Auth',
            'allowAutoLogin' => true,
            'autoRenewCookie' => true,
        ],
        'cache' => [
            'class' => '\Mindy\Cache\DummyCache'
        ],
        'storage' => [
            'class' => '\Mindy\Storage\MimiBoxStorage',
            'apiKey' => 'TBlQ2XqG',
            'username' => 'games.dev'
        ],
        'template' => [
            'class' => '\Mindy\Template\Renderer',
            // 'mode' => YII_DEBUG ? \Mindy\Template\Renderer::RECOMPILE_ALWAYS : \Mindy\Template\Renderer::RECOMPILE_NORMAL,
            'mode' => \Mindy\Template\Renderer::RECOMPILE_ALWAYS,
        ],
        'errorHandler' => [
            'class' => '\Mindy\Base\ErrorHandler',
            'adminInfo' => Params::get('core.email_webmaster'),
            'errorAction' => 'core/main/error'
        ],
        'session' => [
            'class' => '\Modules\User\Components\UserSession',
            'sessionName' => 'mindy',
        ],
        'generator' => [
            'class' => '\Mindy\Base\Generator'
        ],
    ],
    'preload' => [
        'log',
        'db',
    ],
    'modules' => [
        'Core',
        'Meta',
        'Pages',
        'Files',
        'Mail',
        'Menu',
        'User',
        'Redirect',
        'Admin',
        'Translate',
        'Sitemap',
        'Comments',
        'Sites',
        'Slider',
        'Blog',
        'Catalog',
        'Sape',
        'Games',
        'Api',
        'Forum',
    ]
];
