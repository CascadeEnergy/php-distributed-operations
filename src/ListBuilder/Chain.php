<?php

namespace CascadeEnergy\DistributedOperations\ListBuilder;

class Chain implements OperationListBuilderInterface
{
    /** @var OperationListBuilderInterface[] */
    private $operationListBuilderList = [];

    public function addOperationListBuilder(OperationListBuilderInterface $operationListBuilder)
    {
        $this->operationListBuilderList[] = $operationListBuilder;
    }

    public function buildOperationList($batchId, array $options = null)
    {
        $operationList = [];

        foreach ($this->operationListBuilderList as $operationListBuilder) {
            $operationList += $operationListBuilder->buildOperationList($batchId, $options);

            // Stop after any operations have been generated
            if (!empty($operationList)) {
                break;
            }
        }

        return $operationList;
    }
}
