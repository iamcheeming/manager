<?php
return array(
	'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
	'name' => 'My Web Application',
    'theme' => 'classic',
    'timeZone' => 'Asia/Shanghai',
    'defaultController' => 'front/default',
	'preload' => array('log'),

	'import' => array(
		// 'application.models.*',
		'application.components.*',
	),

	'modules' => array(
		'manager',
        'front',
	),

	'components' => array(
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=manager',
			'emulatePrepare' => true,
            'schemaCachingDuration' => 3600,
			'username' => 'root',
			'password' => '123456',
			'charset' => 'utf8',
            'tablePrefix' => 'tbl_',
		),
        # 'cache' => array(
        #     'class' => 'system.caching.CMemCache',
        #     'servers' => array(
        #         array('host' => '127.0.0.1', 'port' => 11211),
        #     ),
        # ),
        'user' => array(
            'class' => 'application.components.WebUser',
            'allowAutoLogin' => true,
            'loginUrl' => array('user/signin'),
            # 'stateKeyPrefix' => 'c_',
            # 'autoRenewCookie' => true,
            # 'identityCookie' => array('domain' => '.manager.com', 'path' => '/'),
        ),
        'session' => array(
            'timeout' => 1440,
            # 'class'=> 'CCacheHttpSession',
            # 'cacheID' => 'cache',
            # 'cookieMode' => 'only',
            # 'sessionName' => 'PHPSESSID',
            # 'cookieParams' => array('domain' => '.manager.com', 'lifetime' => 0),
        ),
        # 'statePersister' => array(
        #     'class' => 'CStatePersister',
        #     'stateFile' => '../runtime/state.bin',
        # ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => include dirname(__FILE__) . DIRECTORY_SEPARATOR . 'routes.php',
        ),
		'errorHandler'=>array(
			'errorAction' => 'site/error',
		),
		'log'=>array(
			'class' => 'CLogRouter',
			'routes' => array(
				array(
					'class' => 'CFileLogRoute',
					'levels' => 'error, warning',
				),
			),
		),
        'assetManager' => array(
            'newFileMode' => 0644,
            'newDirMode' => 0755,
        ),
	),

	'params' => include dirname(__FILE__) . DIRECTORY_SEPARATOR . 'params.php',
);