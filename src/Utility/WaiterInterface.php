<?php

namespace CascadeEnergy\DistributedOperations\Utility;

interface WaiterInterface
{
    public function waitForBatch($batchId);
    public function isBatchDone($batchId);
}
