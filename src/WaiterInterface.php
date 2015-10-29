<?php

namespace CascadeEnergy\DistributedOperations;

interface WaiterInterface
{
    public function waitForBatch($batchId);
}