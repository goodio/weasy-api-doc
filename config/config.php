<?php
return [
    "server" => [
        "host" => "192.168.0.51",
        "port" => 80
    ],

    "handler" => [
        Weasy\Proxy\ApiController::class,
        Weasy\User\Api\AuthApi::class,
        Weasy\User\Api\UserApi::class,

        // 商城接口
        Weasy\Mall\Controllers\Api\NavBarApi::class,

        // 内容接口
        //Weasy\Stcms\Controllers\ApiController::class,
    ]
];