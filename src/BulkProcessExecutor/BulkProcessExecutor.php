<?php

declare(strict_types=1);

namespace Uc\BulkProcess\BulkProcessExecutor;

use Bulkprocess\BulkProcess;
use Bulkprocess\BulkProcessArray;
use Bulkprocess\CreateBulkProcessRequest;
use Bulkprocess\GetBulkProcessStatusByIdRequest;
use Bulkprocess\GetBulkProcessStatusRequest;
use Google\Protobuf\Internal\RepeatedField;
use Uc\BulkProcess\BulkProcessExecutor\Client\BulkProcessClientInterface;
use Uc\BulkProcess\BulkProcessExecutor\Enums\Entity;
use Uc\BulkProcess\BulkProcessExecutor\Enums\Operation;
use Uc\BulkProcess\BulkProcessExecutor\Exceptions\BulkProcessCreationFailedException;
use Uc\BulkProcess\BulkProcessExecutor\Exceptions\UnableToGetBulkProcessException;

use const Grpc\STATUS_OK;

class BulkProcessExecutor
{
    /**
     * @param \Uc\BulkProcess\BulkProcessExecutor\Client\BulkProcessClientInterface $client
     */
    public function __construct(
        protected BulkProcessClientInterface $client,
    ) {
    }

    /**.
     * @param int                                                 $projectId
     * @param array                                               $idsToProcess
     * @param \Uc\BulkProcess\BulkProcessExecutor\Enums\Entity    $entity
     * @param \Uc\BulkProcess\BulkProcessExecutor\Enums\Operation $operation
     * @param string                                              $remoteHost
     *
     * @return \Bulkprocess\BulkProcess
     * @throws \Uc\BulkProcess\BulkProcessExecutor\Exceptions\BulkProcessCreationFailedException
     */
    public function createBulkProcess(
        int $projectId,
        array $idsToProcess,
        Entity $entity,
        Operation $operation,
        string $remoteHost,
        string $workspaceName,
    ): BulkProcess {
        $request = new CreateBulkProcessRequest();
        $request->setProjectId($projectId);
        $request->setIdsToProcess($idsToProcess);
        $request->setEntity($entity->value);
        $request->setOperation($operation->value);
        $request->setRemoteHost($remoteHost);
        $request->setWorkspaceName($workspaceName);

        [$bulkProcess, $status] = $this->client->CreateBulkProcess($request)->wait();

        if ($status->code !== STATUS_OK) {
            throw new BulkProcessCreationFailedException("Bulk process creation failed. {$status->details}", $status->code);
        }

        return $bulkProcess;
    }

    /**
     * @param string $processId
     *
     * @return \Bulkprocess\BulkProcess
     * @throws \Uc\BulkProcess\BulkProcessExecutor\Exceptions\UnableToGetBulkProcessException
     */
    public function getBulkProcess(string $processId): BulkProcess
    {
        $request = new GetBulkProcessStatusRequest();
        $request->setProcessId($processId);

        [$bulkProcess, $status] = $this->client->GetBulkProcessStatus($request)->wait();

        if ($status->code !== STATUS_OK) {
            throw new UnableToGetBulkProcessException();
        }

        return $bulkProcess;
    }

    /**
     * @param array $processIds
     *
     * @return RepeatedField<BulkProcess>
     * @throws \Uc\BulkProcess\BulkProcessExecutor\Exceptions\UnableToGetBulkProcessException
     */
    public function getBulkProcessByIds(array $processIds): RepeatedField
    {
        $request = new GetBulkProcessStatusByIdRequest();
        $request->setProcessIds($processIds);

        /** @var BulkProcessArray $bulkProcesses */
        [$bulkProcesses, $status] = $this->client->GetBulkProcessStatusesByIds($request)->wait();

        if ($status->code !== STATUS_OK) {
            throw new UnableToGetBulkProcessException();
        }

        return $bulkProcesses->getData();
    }
}