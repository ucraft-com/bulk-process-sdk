<?php

declare(strict_types=1);

namespace Tests\BulkProcessExecutor;

use Bulkprocess\BulkProcess;
use Grpc\ChannelCredentials;
use Uc\BulkProcess\BulkProcessExecutor\BulkProcessExecutor;
use Uc\BulkProcess\BulkProcessExecutor\Client\BulkProcessClient;
use Uc\BulkProcess\BulkProcessExecutor\Enums\Entity;
use Uc\BulkProcess\BulkProcessExecutor\Enums\Operation;
use Tests\TestCase;

class BulkProcessExecutorTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testCreateBulkProcess(): void
    {
        $executor = $this->createExecutor();

        $bulkProcess = $executor->createBulkProcess(
            1,
            [
                1,
                2,
                3,
                4,
                5
            ],
            Entity::PRODUCT,
            Operation::DELETE,
            'builder.ucraft.dev',
            'acme',
        );

        $this->assertInstanceOf(BulkProcess::class, $bulkProcess);

        $jsonString = $bulkProcess->serializeToJsonString();

        $this->assertJson($jsonString);

        $arrayData = json_decode($jsonString, true);

        $this->assertIsArray($arrayData);
        $this->assertArrayHasKey('processId', $arrayData);
        $this->assertEquals('1', $arrayData['projectId']);
        $this->assertIsString($arrayData['processId']);
    }

    /**
     * @return void
     * @throws \Uc\BulkProcess\BulkProcessExecutor\Exceptions\BulkProcessCreationFailedException
     * @throws \Exception
     */
    public function testGetBulkProcess(): void
    {
        $executor = $this->createExecutor();

        $createdBulkProcess = $executor->createBulkProcess(
            1,
            [
                1,
                2,
                3,
                4,
                5
            ],
            Entity::PRODUCT,
            Operation::DELETE,
            'builder.ucraft.dev',
            'acme',
        );

        $bulkProcess = $executor->getBulkProcess($createdBulkProcess->getProcessId());

        $this->assertEquals($createdBulkProcess->getProcessId(), $bulkProcess->getProcessId());
    }

    /**
     * @throws \Exception
     */
    protected function createExecutor(): BulkProcessExecutor
    {
        return new BulkProcessExecutor(
            new BulkProcessClient('localhost:50051', [
                'credentials' => ChannelCredentials::createInsecure(),
                'update_metadata' => function (array $metadata) {
                    $metadata['Authorization'] = ["Bearer s2q2wVncj?isYcWQcgIuRZY1MawP9Us?sJQVHuM!qsjhqs6yY49ULVVPU!HzQaKMjUsh5vpQ="];

                    return $metadata;
                }
            ])
        );
    }
}