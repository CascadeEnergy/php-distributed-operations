<?php

namespace CascadeEnergy\DistributedOperations\Utility;

use CascadeEnergy\DistributedOperations\OperationInterface;

interface StorageInterface
{
    public function reload(OperationInterface $operation);
    public function store(OperationInterface $operation);
}
