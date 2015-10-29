<?php

namespace CascadeEnergy\DistributedOperations;

interface OperationInterface
{
    public function getBatchId();
    public function setBatchId($batchId);
    
    public function getDisposition();
    public function setDisposition($disposition);

    public function getId();
    public function setId($id);

    public function getOptions();
    public function getOption($name);
    public function setOptions(array $options);

    public function getState();
    public function setState($state);

    public function getStorageAttribute($name);
    public function setStorageAttribute($name, $value);

    public function getType();
    public function setType($type);
}
