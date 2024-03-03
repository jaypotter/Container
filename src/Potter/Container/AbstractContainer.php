<?php

declare(strict_types=1);

namespace Potter\Container;

abstract class AbstractContainer implements ContainerInterface
{
    abstract public function get(string $id): mixed;
    abstract public function has(string $id): bool;
    abstract protected function set(string $id, mixed $entry): void;
    abstract protected function unset(string $id): void;
}