<?php

declare( strict_types = 1 );

namespace yzh52521\filesystem\driver;

use think\filesystem\Driver;
use yzh52521\Flysystem\Obs\ObsAdapter;

class Obs extends Driver
{

    protected function createAdapter()
    {
        return new ObsAdapter( [
            'key'        => $this->config['key'],
            'secret'     => $this->config['secret'],
            'bucket'     => $this->config['bucket'],
            'endpoint'   => $this->config['endpoint'],
            'cdn_domain' => $this->config['cdn_domain'],
            'ssl_verify' => $this->config['ssl_verify'],
            'debug'      => $this->config['debug'],
        ] );
    }

}
