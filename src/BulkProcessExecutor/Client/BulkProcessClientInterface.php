<?php

declare(strict_types=1);

namespace Uc\BulkProcess\BulkProcessExecutor\Client;

use Bulkprocess\CreateBulkProcessRequest;
use Bulkprocess\GetBulkProcessStatusByIdRequest;
use Bulkprocess\GetBulkProcessStatusRequest;
use Grpc\UnaryCall;

interface BulkProcessClientInterface
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
    ): UnaryCall;

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
    ): UnaryCall;

    /**
     * @param \Bulkprocess\GetBulkProcessStatusByIdRequest $getBulkProcessStatusesRequest
     * @param array                                        $metadata
     * @param array                                        $options
     *
     * @return \Grpc\UnaryCall
     */
    public function GetBulkProcessStatusesByIds(
        GetBulkProcessStatusByIdRequest $getBulkProcessStatusesRequest,
        array $metadata = [],
        array $options = [],
    ): UnaryCall;
}