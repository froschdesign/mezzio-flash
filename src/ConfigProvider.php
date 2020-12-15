<?php

/**
 * @see       https://github.com/mezzio/mezzio-flash for the canonical source repository
 * @copyright https://github.com/mezzio/mezzio-flash/blob/master/COPYRIGHT.md
 * @license   https://github.com/mezzio/mezzio-flash/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Mezzio\Flash;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencies(),
        ];
    }

    public function getDependencies(): array
    {
        return [
            // Legacy Zend Framework aliases
            'aliases'    => [
                \Zend\Expressive\Flash\FlashMessageMiddleware::class => FlashMessageMiddleware::class,
            ],
            'invokables' => [
                FlashMessageMiddleware::class => FlashMessageMiddleware::class,
            ],
        ];
    }
}
