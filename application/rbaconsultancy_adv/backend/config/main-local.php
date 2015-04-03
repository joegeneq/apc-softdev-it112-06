<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'SHAptGKzYD3Jmdrm7wB3KPlzMNmk5Qu0',
        ],
    ],

    'modules' => [
        'gridview' =>  [
        'class' => '\kartik\grid\Module'
            ]
        ],
    'params' => [
        'icon-framework' => 'bsg'  // set elusive icon font as default framework
    ],        
];



if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    //$config['bootstrap'][] = 'debug';
    //$config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
