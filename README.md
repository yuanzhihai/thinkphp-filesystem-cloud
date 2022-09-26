<h1><p align="center">thinkphp-filesystem-cloud</p></h1>
<p align="center"> thinkphp6.0 的文件系统扩展包，支持上传阿里云OSS和七牛和腾讯云COS和awsS3</p>

## 包含

1. php >= 8.0
2. thinkphp >=6.0.0

## 支持

1. 阿里云
2. 七牛云
3. 腾讯云
4. 华为云
5. AwsS3
6. sfpt

## 安装

第一步：

```shell
$ composer require yzh52521/thinkphp-filesystem-cloud
```

第二步： 在config/filesystem.php中添加配置

```php
'aliyun' => [
    'type'         => 'aliyun',
    'access_id'     => 'OSS_ACCESS_ID',
    'access_secret' => 'OSS_ACCESS_SECRET',
    'bucket'       => 'OSS_BUCKET',
    'endpoint'     => 'OSS_ENDPOINT',
    'isCName'=>'',
    'prefix'=>'',
    'options'=>[
        'url' => '',
        'endpoint' => '', 
        'bucket_endpoint' => '',
        'temporary_url' => '',
    ],
],
'qiniu'  => [
    'type'      => 'qiniu',
    'access_key' => '******',
    'secret_key' => '******',
    'bucket'    => 'bucket',
    'domain' =>'',
],
'qcloud' => [
    'type'       => 'qcloud',
    'app_id' => 10020201024, 
    'secret_id' => 'AKIDsiQzQla780mQxLLU2GJCxxxxxxxxxxx', 
    'secret_key' => 'b0GMH2c2NXWKxPhy77xhHgwxxxxxxxxxxx',
    'region' => 'ap-guangzhou', 
    'bucket' => 'example',
    // 可选，如果 bucket 为私有访问请打开此项
    'signed_url' => false,
    // 可选，是否使用 https，默认 false
    'use_https' => true, 
    // 可选，自定义域名
    'domain' => 'emample-12340000.cos.test.com', 
    // 可选，使用 CDN 域名时指定生成的 URL host
    'cdn' => 'https://youcdn.domain.com/',
    'prefix' => env('COS_PATH_PREFIX'), // 全局路径前缀
    'guzzle' => [
       'timeout' => env('COS_TIMEOUT', 60),
        'connect_timeout' => env('COS_CONNECT_TIMEOUT', 60),
     ],
],
'obs'=>[
     'key'        => 'OBS_ACCESS_ID',
     'secret'     => 'OBS_ACCESS_KEY', //Huawei OBS AccessKeySecret
     'bucket'     => 'OBS_BUCKET', //OBS bucket name
     'endpoint'   => 'OBS_ENDPOINT',
     'prefix'=>'',
     'bucket_endpoint'=>'',
     'temporary_url' => '',
],
's3'=>[
    'key' => env('AWS_ACCESS_KEY_ID'),
    'secret' => env('AWS_SECRET_ACCESS_KEY'),
    'region' => env('AWS_DEFAULT_REGION'),
    'bucket' => env('AWS_BUCKET'),
    'url' => env('AWS_URL'),
    'endpoint' => env('AWS_ENDPOINT'),
    'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
],
'sftp'=>[
    'host' => 'example.com',
    'port' => 22,
    'username' => 'username',
    'password' => 'password',
    'privateKey' => 'path/to/or/contents/of/privatekey',
    'passphrase' => 'passphrase-for-privateKey',
    'root' => '/path/to/root',
    'timeout' => 10,
    'directoryPerm' => 0755
]
```

第三步： 开始使用。 请参考thinkphp文档
文档地址：[https://www.kancloud.cn/manual/thinkphp6_0/1037639 ](https://www.kancloud.cn/manual/thinkphp6_0/1037639 )

## 授权

MIT

## 感谢

1. thinkphp
3. overtrue/flysystem-qiniu
4. league/flysystem
5. overtrue/flysystem-cos
7. thans/thinkphp-filesystem-cloud
