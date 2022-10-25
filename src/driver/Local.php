<?php

declare( strict_types = 1 );

namespace yzh52521\filesystem\driver;

use League\Flysystem\Local\LocalFilesystemAdapter;
use League\Flysystem\UnixVisibility\PortableVisibilityConverter;
use League\Flysystem\Visibility;
use yzh52521\filesystem\Driver;

class Local extends Driver
{

    /**
     * 配置参数
     * @var array
     */
    protected $config = [
        'root' => '',
    ];

    protected function createAdapter(): LocalFilesystemAdapter
    {

        $links = ( $this->config['links'] ?? null ) === 'skip'
            ? LocalFilesystemAdapter::SKIP_LINKS
            : LocalFilesystemAdapter::DISALLOW_LINKS;

        $visibility = PortableVisibilityConverter::fromArray(
            $config['permissions'] ?? [],
            $config['directory_visibility'] ?? $config['visibility'] ?? Visibility::PRIVATE
        );

        return new LocalFilesystemAdapter(
            $this->config['root'],
            $visibility,
            $config['lock'] ?? LOCK_EX,
            $links
        );
    }
}
