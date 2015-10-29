<?php

namespace CascadeEnergy\DistributedOperations;

interface OperationInterface
{
    public function getDisposition();
    public function getOptions();
    public function getState();
    public function getType();
}