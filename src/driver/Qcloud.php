<?php

declare( strict_types = 1 );

namespace yzh52521\filesystem\driver;

use Overtrue\Flysystem\Cos\CosAdapter;
use think\filesystem\Driver;

class Qcloud extends Driver
{

    protected function createAdapter()
    {
        return new CosAdapter( $this->config );
    }

}
