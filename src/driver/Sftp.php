<?php

namespace yzh52521\filesystem\driver;

use League\Flysystem\AdapterInterface;
use think\filesystem\Driver;

class Sftp extends Driver
{
    protected function createAdapter(): AdapterInterface
    {
        return new \League\Flysystem\Sftp\SftpAdapter($this->config);
    }
}