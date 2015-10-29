<?php

namespace CascadeEnergy\DistributedOperations;

interface StorageInterface
{
    public function store(OperationInterface $operation);
}