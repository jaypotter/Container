<?php

declare(strict_types=1);

namespace Potter\Container;

use \Potter\Aware\AwareInterface;
use \Potter\Cloneable\{
    CloneableInterface,
    CloneableTrait
};

final class Container extends AbstractContainer implements AwareInterface, CloneableInterface
{
    use CloneableTrait, ContainerTrait, StaticContainerTrait;
    
    public function __construct(array $entries = [])
    {
        foreach ($entries as $id => $entry) {
            $this->set($id, $entry);
        }
    }
}