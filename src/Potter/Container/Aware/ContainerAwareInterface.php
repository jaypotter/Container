<?php

declare(strict_types=1);

namespace Potter\Container\Aware;

use \Potter\Aware\AwareInterface;

interface ContainerAwareInterface extends AwareInterface
{
    public function hasContainer(): bool;
}