<?php

declare(strict_types=1);

namespace Potter\Container;

interface ContainerInterface
    extends \Psr\Container\ContainerInterface,
            \League\Container\DefinitionContainerInterface
{ }
