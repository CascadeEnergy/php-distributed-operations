<?php

namespace CascadeEnergy\DistributedOperations\Utility;

interface UtilityFactoryInterface
{
    public function createCounter();
    public function createProvider();
    public function createStorage();
    public function createWaiter();
}