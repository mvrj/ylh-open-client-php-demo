# ylh-open-client-php-demo
云联惠开放平台demo

# 安装
```
git clone https://github.com/mvrj/ylh-open-client-php-demo
composer install
```

# 配置

```
//文件路径： demo/config.php

//配置成如下:
//根据配置修改相应信息
$config = [
    //应用ID
    'client_id' => "bd763a1",
    //应用密钥
    'client_secret' => 'bd763a1bd763a1bd763a1',
    //应用回调地址
    'redirect_uri' => 'https://example.com/redirect_uri',
    //应用私钥，您的原始格式RSA私钥
    'client_private_key' => "MIICdQIBADANBgkqhki..........",
    //同步跳转
    'return_url' => 'https://example.com/return_url.php',
    //异步通知地址
    'notify_url' => 'https://example.com/notify_url.php',
    //云联惠API网关
    'gatewayUrl' => "https://openapidev.yunlianhui.com", //沙箱环境openapidev 正式环境 openapi
    //云联惠开放平台收银台
    'gatewayPay' => "http://openpaydev.yunlianhui.com",//沙箱环境openpaydev 正式环境 openpay
    //云联惠公钥
    'yunlianhui_public_key' => "{yunlianhui_public_key}",

];


```

# 测试

```
本地测试：
php -S localhost:8000
```
