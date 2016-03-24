<?php

namespace CascadeEnergy\DistributedOperations\Utility;

interface ProviderInterface
{
    public function setChannel($channel);

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
