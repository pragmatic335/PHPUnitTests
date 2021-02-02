<?php

$db = require __DIR__ . '/db.php';

return [
//    'language' => 'en-US',
    'components' => [
        'db' => $db ,
    ],
//    'urlManager' => [
//        'showScriptName' => true,
//    ]
];

