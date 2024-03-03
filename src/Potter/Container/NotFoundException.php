<?php

declare(strict_types=1);

namespace Potter\Container;

use \Exception, \Psr\Container\NotFoundExceptionInterface;

final class NotFoundException extends Exception implements NotFoundExceptionInterface
{

}