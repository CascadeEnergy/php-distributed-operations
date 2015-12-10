<?php

namespace CascadeEnergy\DistributedOperations\ListBuilder;

class Pipeline implements OperationListBuilderInterface
{
    /** @var OperationListBuilderInterface[] */
    private $operationListBuilderList = [];

    public function addOperationListBuilder(OperationListBuilderInterface $operationListBuilder)
    {
        $this->operationListBuilderList[] = $operationListBuilder;
    }

    public function buildOperationList($batchId, array $options = [], array $preconditions = [])
    {
        $operationList = [];

        foreach ($this->operationListBuilderList as $operationListBuilder) {
            $operationList += $operationListBuilder->buildOperationList($batchId, $options, $preconditions);
        }

        return $operationList;
    }
}
