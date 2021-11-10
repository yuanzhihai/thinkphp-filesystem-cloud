<?php

declare(strict_types=1);

namespace yzh52521\filesystem\driver;

use League\Flysystem\AdapterInterface;
use think\filesystem\Driver;
use yzh52521\Flysystem\Obs\ObsAdapter;

class Obs extends Driver
{

    protected function createAdapter(): AdapterInterface
    {
        return new ObsAdapter([
                                  'key'        => $this->config['key'],
                                  'secret'     => $this->config['secret'],
                                  'bucket'     => $this->config['bucket'],
                                  'endpoint'   => $this->config['endpoint'],
                                  'cdn_domain' => $this->config['cdn_domain'],
                                  'ssl_verify' => $this->config['ssl_verify'],
                                  'debug'      => $this->config['debug']
                              ]);
    }

    public function url(string $path): string
    {
        if (isset($this->config['url'])) {
            return $this->concatPathToUrl($this->config['url'], $path);
        }
        return parent::url($path);
    }
}
