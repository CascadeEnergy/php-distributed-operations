<?php

namespace CascadeEnergy\DistributedOperations;

interface OperationInterface
{
    public function getBatchId();
    public function setBatchId($batchId);

    public function getChannel();
    public function setChannel($channel);
    
    public function getDisposition();
    public function setDisposition($disposition);

    public function getId();
    public function setId($id);

    public function getOption($name);
    public function getOptions();
    public function setOption($name, $value);
    public function setOptions(array $options);

    public function getPrecondition($condition);
    public function getPreconditions();
    public function setPrecondition($condition, $value);
    public function setPreconditions(array $preconditions);

    public function getState();
    public function setState($state);

    public function getStorageAttribute($name);
    public function setStorageAttribute($name, $value);

    public function getType();
    public function setType($type);
}
