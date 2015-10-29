<?php

namespace CascadeEnergy\DistributedOperations\Utility;

trait UtilityFactoryConsumerTrait
{
    /** @var UtilityFactoryInterface */
    protected $utilityFactory;

    public function setUtilityFactory(UtilityFactoryInterface $utilityFactory)
    {
        $this->utilityFactory = $utilityFactory;
    }
}