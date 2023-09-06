<?php

declare(strict_types=1);

namespace Uc\BulkProcess\BulkProcessExecutor\Client;

use Bulkprocess\BulkProcess;
use Bulkprocess\CreateBulkProcessRequest;
use Bulkprocess\GetBulkProcessStatusRequest;
use Grpc\BaseStub;
use Grpc\UnaryCall;

class BulkProcessClient extends BaseStub implements BulkProcessClientInterface
{
    /**
     * @param \Bulkprocess\CreateBulkProcessRequest $createBulkProcessRequest
     * @param array                                 $metadata
     * @param array                                 $options
     *
     * @return \Grpc\UnaryCall
     */
    public function CreateBulkProcess(
        CreateBulkProcessRequest $createBulkProcessRequest,
        array $metadata = [],
        array $options = [],
    ): UnaryCall {
        return $this->_simpleRequest(
            '/bulkprocess.BulkProcessService/CreateBulkProcess',
            $createBulkProcessRequest,
            [BulkProcess::class, 'decode'],
            $metadata,
            $options
        );
    }

    /**
     * @param \Bulkprocess\GetBulkProcessStatusRequest $getBulkProcessStatusRequest
     * @param array                                    $metadata
     * @param array                                    $options
     *
     * @return \Grpc\UnaryCall
     */
    public function GetBulkProcessStatus(
        GetBulkProcessStatusRequest $getBulkProcessStatusRequest,
        array $metadata = [],
        array $options = [],
    ): UnaryCall {
        return $this->_simpleRequest(
            '/bulkprocess.BulkProcessService/GetBulkProcessStatus',
            $getBulkProcessStatusRequest,
            [BulkProcess::class, 'decode'],
            $metadata,
            $options
        );
    }
}