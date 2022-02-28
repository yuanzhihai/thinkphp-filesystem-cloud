<?php

namespace yzh52521\filesystem\driver;

use League\Flysystem\AdapterInterface;
use think\filesystem\Driver;

class Sftp extends Driver
{
    protected function createAdapter(): AdapterInterface
    {
        $adapter = new \League\Flysystem\SftpAdapter($this->config);
        return new League\Flysystem\Filesystem($adapter);
    }
}