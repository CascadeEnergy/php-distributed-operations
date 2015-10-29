<?php

namespace CascadeEnergy\DistributedOperations\Utility;

interface UtilityFactoryInterface
{
    /**
     * @return CounterInterface
     */
    public function createCounter();

    /**
     * @return ProviderInterface
     */
    public function createProvider();

    /**
     * @return StorageInterface
     */
    public function createStorage();

    /**
     * @return WaiterInterface
     */
    public function createWaiter();
}