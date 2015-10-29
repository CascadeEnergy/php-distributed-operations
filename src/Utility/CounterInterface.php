<?php

namespace CascadeEnergy\DistributedOperations\Utility;

interface CounterInterface
{
    public function setBatchId($batchId);
    public function setDisposition($disposition);
    public function setState($state);
    public function setType($type);

    public function getCount();
}