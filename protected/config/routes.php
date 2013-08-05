<?php
return array(

    // '<controller:\w+>/<id:\d+>'=>'<controller>/view',
    // '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
    // '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',

    // manager
    'manager/<action:(signin|signout|auth)>' => 'manager/default/<action>',
    'manager/category/list' => 'manager/category/index',
    'manager/category/<action:(edit|del)>/<id:\d+>' => 'manager/category/<action>',
    'manager/nav/list/<pid:\d+>' => 'manager/nav/index',
    'manager/nav/add/<pid:\d+>' => 'manager/nav/add',
    'manager/nav/edit/<id:\d+>' => 'manager/nav/edit',
    'manager/article/list/<cid:\d+>' => 'manager/article/index',
    'manager/article/add/<cid:\d+>' => 'manager/article/add',
    'manager/article/edit/<id:\d+>' => 'manager/article/edit',
);