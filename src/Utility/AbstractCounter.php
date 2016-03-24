<?php

namespace CascadeEnergy\DistributedOperations\Utility;

abstract class AbstractCounter implements CounterInterface
{
    protected $batchId;

    protected $disposition;

    protected $state;

    protected $type;

    public function setBatchId($batchId)
    {
        $this->batchId = $batchId;
    }

    public function setDisposition($disposition)
    {
        $this->disposition = $disposition;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}