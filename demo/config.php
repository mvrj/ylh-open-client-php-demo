<?php
/* *
 * 功能：云联惠支付接口 接口调试入口页面
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 请确保项目文件有可写权限，不然打印不了日志。
 */


//根据配置修改相应信息
$config = [
    //应用ID
    'client_id' => "{client_id}",
    //应用密钥
    'client_secret' => '{client_secret}',
    //应用回调地址
    'redirect_uri' => '{redirect_uri}',
    //应用私钥，您的原始格式RSA私钥
    'client_private_key' => "{client_private_key}",
    //同步跳转
    'return_url' => 'https://example.com/return_url.php',
    //异步通知地址
    'notify_url' => 'https://example.com/notify_url.php',
    //云联惠API网关
    'gatewayUrl' => "https://openapi.yunlianhui.com", //沙箱环境openapidev 正式环境 openapi
    //云联惠开放平台收银台
    'gatewayPay' => "http://openpay.yunlianhui.com",//沙箱环境openpaydev 正式环境 openpay
    //云联惠公钥
    'yunlianhui_public_key' => "{yunlianhui_public_key}",

];
