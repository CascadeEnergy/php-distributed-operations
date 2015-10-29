<?php

namespace CascadeEnergy\DistributedOperations\Utility;

interface StorageInterface
{
    public function store(OperationInterface $operation);
}