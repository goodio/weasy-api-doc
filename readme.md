# 扫糖网接口代理模块

## TODO

- 只代理 `host` ,URI直接转发

## 开发模式安装

把 `Weasy\Proxy\ProxyServiceProvider::class` 添加到 `app.php` 里

迁移配置文件
```bash
php artisan vendor:publish --tag=proxy.config
```

## 使用

http://host/v1/snc/apiuri
