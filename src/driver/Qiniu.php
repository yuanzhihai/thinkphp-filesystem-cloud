<?php

namespace yzh52521\filesystem\driver;


use League\Flysystem\AdapterInterface;
use Overtrue\Flysystem\QiNiu\QiniuAdapter;
use think\filesystem\Driver;

class Qiniu extends Driver
{

    protected function createAdapter(): AdapterInterface
    {
        return new QiniuAdapter(
            $this->config['accessKey'], $this->config['secretKey'],
            $this->config['bucket'], $this->config['domain']
        );
    }
}
