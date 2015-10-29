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
    private $id;

    /** @var array */
    private $options = [];

    /** @var string */
    private $state = self::STATE_NEW;

    /** @var array */
    private $storageAttributes = [];

    /** @var string */
    private $type;

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

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getOptions()
    {
        return $this->options;
    }

    public function getOption($name)
    {
        if (!array_key_exists($name, $this->options)) {
            return null;
        }

        return $this->options[$name];
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

    public function getStorageAttribute($name)
    {
        if (!array_key_exists($name, $this->storageAttributes)) {
            return null;
        }

        return $this->storageAttributes[$name];
    }

    public function setStorageAttribute($name, $value)
    {
        $this->storageAttributes[$name] = $value;
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
