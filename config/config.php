<?php
return [
    "server" => [
        "host" => "192.168.0.51",
        "port" => 80
    ],

    "handler" => [
        Weasy\User\Api\AuthApi::class,
        Weasy\User\Api\UserApi::class,
        Weasy\Proxy\ApiController::class,

        // 商城接口
        Weasy\Mall\Controllers\Api\NavBarApi::class,
        Weasy\Mall\Controllers\Api\GoodsApi::class,
        Weasy\Mall\Controllers\Api\CartApi::class,

        // 内容接口
        //Weasy\Stcms\Controllers\ApiController::class,
    ]
];