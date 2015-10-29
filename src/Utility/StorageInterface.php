<?php

namespace CascadeEnergy\DistributedOperations\Utility;

use CascadeEnergy\DistributedOperations\OperationInterface;

interface StorageInterface
{
    public function store(OperationInterface $operation);
}