<?php
return CMap::mergeArray(
	require dirname(__FILE__) . '/main.php',
	array(
		'components' => array(
			'fixture' => array(
				'class' => 'system.test.CDbFixtureManager',
			),
            'db'=>array(
                'connectionString' => 'mysql:host=localhost;dbname=manager',
                'emulatePrepare' => true,
                'enableProfiling' => true,
                'schemaCachingDuration' => 60,
                'username' => 'root',
                'password' => '123456',
                'charset' => 'utf8',
                'tablePrefix' => 'tbl_',
            ),
            'log'=>array(
                'class' => 'CLogRouter',
                'routes' => array(
                    array(
                        'class' => 'CFileLogRoute',
                        'levels' => 'trace, info',
                        'categories' => 'system.*',
                    ),
                    array(
                        'class' => 'CProfileLogRoute',
                        'levels' => 'trace, info, profile, error, warning',
                    ),
                    array(
                        'class' => 'CWebLogRoute',
                        'levels' => 'trace, info, profile, error, warning',
                        // 'showInFireBug' => true,
                    ),
                ),
            ),
		),
	)
);
