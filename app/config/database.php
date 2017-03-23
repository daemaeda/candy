<?php

$config['database'] = array(
    'default'       => 'mysql',

    'connections'   => array(

        'mysql' => array(
            'driver'    => 'mysql',
            // http://qiita.com/dolaemoso/items/35f6bba22801b4027ec4
            'host'      => isset($_SERVER['LOCAL_MODE']) ? $_SERVER['LOCAL_HOST'] : $_SERVER['PRODUCTION_HOST'],
            'database'  => isset($_SERVER['LOCAL_MODE']) ? $_SERVER['LOCAL_NAME'] : $_SERVER['PRODUCTION_NAME'],
            'username'  => isset($_SERVER['LOCAL_MODE']) ? $_SERVER['LOCAL_USER'] : $_SERVER['PRODUCTION_USER'],
            'password'  => isset($_SERVER['LOCAL_MODE']) ? $_SERVER['LOCAL_PASS'] : $_SERVER['PRODUCTION_PASS'],
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ),
    )
);