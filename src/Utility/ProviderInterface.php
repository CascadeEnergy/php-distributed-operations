<?php

namespace CascadeEnergy\DistributedOperations\Utility;

interface ProviderInterface
{
    public function setType($type);

    /**
     * @return \Traversable
     */
    public function begin();

    /**
     * @param \Traversable $providerIterator
     */
    public function end(\Traversable $providerIterator);
}
