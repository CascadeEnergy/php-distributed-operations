<?php

namespace CascadeEnergy\DistributedOperations;

class Operation implements OperationInterface
{
    const STATE_NEW = 'new';
    const STATE_COMPLETE = 'complete';

    const DISPOSITION_FAILED = 'failed';
    const DISPOSITION_NONE = 'none';
    const DISPOSITION_SUCCEEDED = 'succeeded';
    const DISPOSITION_UNKNOWN = 'unknown';

    /** @var string */
    private $batchId;

    /** @var string */
    private $disposition = self::DISPOSITION_NONE;

    /** @var string */
    private $state = self::STATE_NEW;

    /** @var string */
    private $type;

    /** @var array */
    private $options = [];

    public function __construct($type, $batchId, $options)
    {
        $this->type = $type;
        $this->batchId = $batchId;
        $this->options = $options;
    }

    public function getBatchId()
    {
        return $this->batchId;
    }

    public function setBatchId($batchId)
    {
        $this->batchId = $batchId;
    }

    public function getDisposition()
    {
        return $this->disposition;
    }

    public function setDisposition($disposition)
    {
        $this->disposition = $disposition;
    }

    public function getOptions()
    {
        return $this->options;
    }

    public function setOptions(array $options)
    {
        $this->options = $options;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}