<?php
return array(
	'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
	'name' => 'My Web Application',
    'theme' => 'classic',
    'defaultController' => 'front/default',

	'preload' => array('log'),

	'import' => array(
		'application.models.*',
		'application.components.*',
	),

	'modules' => array(
		'manager',
        'front',
	),

	// application components
	'components' => array(
		'user' => array(
            'class' => 'application.components.WebUser',
			'allowAutoLogin' => true,
            'loginUrl' => array('user/signin'),
		),
		'urlManager' => array(
			'urlFormat' => 'path',
            'showScriptName' => false,
			'rules' => include dirname(__FILE__) . DIRECTORY_SEPARATOR . 'routes.php',
		),
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=manager',
			'emulatePrepare' => true,
            'schemaCachingDuration' => 3600,
			'username' => 'root',
			'password' => '123456',
			'charset' => 'utf8',
            'tablePrefix' => 'tbl_',
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
