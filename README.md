> 为了后期更好的维护think6.1版本已修改包名，请注意切换
[https://github.com/yzh52521/think-filesystem ](https://github.com/yzh52521/think-filesystem )




<h1><p align="center">thinkphp-filesystem-cloud</p></h1>
<p align="center"> thinkphp6.0 的文件系统扩展包，支持上传阿里云OSS和七牛和腾讯云COS和华为云OBS和awsS3</p>

## 包含

1. php >= 7.1
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

```
'aliyun' => [
    'type'         => 'aliyun',
    'accessId'     => '******',
    'accessSecret' => '******',
    'bucket'       => 'bucket',
    'endpoint'     => 'oss-cn-hongkong.aliyuncs.com',
    'url'          => 'http://oss-cn-hongkong.aliyuncs.com',//不要斜杠结尾，此处为URL地址域名。
],
'qiniu'  => [
    'type'      => 'qiniu',
    'accessKey' => '******',
    'secretKey' => '******',
    'bucket'    => 'bucket',
    'domain'    => '',
    'url'       => '',//不要斜杠结尾，此处为URL地址域名。
],
'qcloud' => [
    'type'       => 'qcloud',
    'region'      => '***', //bucket 所属区域 英文
    'appId'      => '***', // 域名中数字部分
    'secretId'   => '***',
    'secretKey'  => '***',
    'bucket'          => '***',
    'timeout'         => 60,
    'connect_timeout' => 60,
    'cdn'             => '您的 CDN 域名',
    'scheme'          => 'https',
    'read_from_cdn'   => false,
]
'obs'=>[
     'type'       => 'obs',
     'key'        => 'OBS_ACCESS_ID',
     'secret'     => 'OBS_ACCESS_KEY', //Huawei OBS AccessKeySecret
     'bucket'     => 'OBS_BUCKET', //OBS bucket name
     'endpoint'   => 'OBS_ENDPOINT',
     'cdn_domain' => 'OBS_CDN_DOMAIN',
     'ssl_verify' => 'OBS_SSL_VERIFY',
     'debug'      => 'APP_DEBUG',
],
's3'=>[
      'type'       => 's3',
      'credentials'             => [
                'key'    => 'S3_KEY',
                'secret' => 'S3_SECRET',
      ],
      'region'                  => 'S3_REGION',
      'version'                 => 'latest',
      'bucket_endpoint'         => false,
      'use_path_style_endpoint' => false,
      'endpoint'                => 'S3_ENDPOINT',
      'bucket_name'             => 'S3_BUCKET',
],
'sftp'=>[
    'type' => 'sftp',
    'host' => 'example.com',
    // 基于基础的身份验证设置...
    'username' => 'username',
    'password' => 'password',
   // 使用加密密码进行基于 SSH 密钥的身份验证的设置...
    'privateKey' => null,
    'passphrase' => null,
     // 可选的 SFTP 设置
    'port' => 22,
    'root' => '/path/to/root',
    'url' => '/path/to/root',
    'timeout' => 10,
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
