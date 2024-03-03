<?php

declare(strict_types=1);

namespace Potter\Container;

use \Psr\Container\ContainerInterface as PsrContainerInterface;

interface ContainerInterface extends PsrContainerInterface
{
    public function get(string $id): mixed;
    public function has(string $id): bool;
}