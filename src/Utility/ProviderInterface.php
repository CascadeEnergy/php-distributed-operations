<?php

namespace CascadeEnergy\DistributedOperations\Utility;

interface ProviderInterface extends \IteratorAggregate
{
    public function setType($type);
}