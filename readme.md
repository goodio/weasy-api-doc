# 注释文档模块

## TODO

- 利用php反射生成接口文档
- 接口测试页面
- 需生成文档的控制器可配置

## 使用

1. 迁移配置文件
```php
php artisan vendor:publish --tag=doc.config
```

2. 打开 `config/doc.php` 文件进行配置
```php
return [
    // 接口服务器配置
    "server" => [
        "host" => "192.168.0.51",
        "port" => 80
    ],

    // 需生成文档的控制器
    "handler" => [
        ...
        Weasy\User\Api\AuthApi::class,
    ]
];
```

3. 生成文档
```php
php artisan doc:generate
```

文档保存在 `storage/doc/doc.json` 中
