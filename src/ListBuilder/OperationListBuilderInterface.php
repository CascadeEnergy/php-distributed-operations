<?php

namespace CascadeEnergy\DistributedOperations\ListBuilder;

interface OperationListBuilderInterface
{
    public function buildOperationList($batchId, array $options = [], array $preconditions = []);

    public function setFamilyId($familyId);
}
