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
    private $createdTimestamp;

    /** @var string */
    private $channel;

    /** @var string */
    private $disposition = self::DISPOSITION_NONE;

    /** @var string */
    private $id;

    /** @var array */
    private $metadata = [];

    /** @var string */
    private $modifiedTimestamp;

    /** @var array */
    private $options = [];

    /** @var array */
    private $preconditions = [];

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

        $now = new \Datetime();
        $this->createdTimestamp = $now->format('c');
    }

    public function getBatchId()
    {
        return $this->batchId;
    }

    public function setBatchId($batchId)
    {
        $this->batchId = $batchId;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param string $channel
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
    }

    /**
     * @return string
     */
    public function getCreatedTimestamp()
    {
        return $this->createdTimestamp;
    }

    /**
     * @param $timestamp
     */
    public function setCreatedTimestamp($timestamp)
    {
        $this->createdTimestamp = $timestamp;
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

    public function getMetadata($name)
    {
        if (!array_key_exists($name, $this->metadata)) {
            return null;
        }

        return $this->metadata[$name];
    }

    public function setMetadata($name, $value)
    {
        $this->metadata[$name] = $value;
    }

    /**
     * @return string
     */
    public function getModifiedTimestamp()
    {
        return $this->modifiedTimestamp;
    }

    /**
     * @param string $timestamp
     */
    public function setModifiedTimestamp($timestamp)
    {
        $this->modifiedTimestamp = $timestamp;
    }

    public function getOption($name)
    {
        if (!array_key_exists($name, $this->options)) {
            return null;
        }

        return $this->options[$name];
    }

    public function getOptions()
    {
        return $this->options;
    }

    public function setOption($name, $value)
    {
        $this->options[$name] = $value;
    }

    public function setOptions(array $options)
    {
        $this->options = $options;
    }

    public function getPrecondition($condition)
    {
        if (!array_key_exists($condition, $this->preconditions)) {
            return null;
        }

        return $this->preconditions[$condition];
    }

    public function getPreconditions()
    {
        return $this->preconditions;
    }

    public function setPrecondition($condition, $value)
    {
        $this->preconditions[$condition] = $value;
    }

    public function setPreconditions(array $preconditions)
    {
        $this->preconditions = $preconditions;
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
