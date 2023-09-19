<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/bulk-process.proto

namespace Bulkprocess;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bulkprocess.BulkProcess</code>
 */
class BulkProcess extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 project_id = 1;</code>
     */
    protected $project_id = 0;
    /**
     * Generated from protobuf field <code>repeated string completed_ids = 2;</code>
     */
    private $completed_ids;
    /**
     * Generated from protobuf field <code>repeated string ids_to_process = 3;</code>
     */
    private $ids_to_process;
    /**
     * Generated from protobuf field <code>.bulkprocess.Status status = 4;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>.bulkprocess.Operation operation = 5;</code>
     */
    protected $operation = 0;
    /**
     * Generated from protobuf field <code>string process_id = 6;</code>
     */
    protected $process_id = '';
    /**
     * Generated from protobuf field <code>.bulkprocess.Entity entity = 7;</code>
     */
    protected $entity = 0;
    /**
     * Generated from protobuf field <code>repeated string failed_ids = 8;</code>
     */
    private $failed_ids;
    /**
     * Generated from protobuf field <code>string remote_host = 9;</code>
     */
    protected $remote_host = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $project_id
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $completed_ids
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $ids_to_process
     *     @type int $status
     *     @type int $operation
     *     @type string $process_id
     *     @type int $entity
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $failed_ids
     *     @type string $remote_host
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\BulkProcess::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 project_id = 1;</code>
     * @return int|string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Generated from protobuf field <code>int64 project_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkInt64($var);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string completed_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCompletedIds()
    {
        return $this->completed_ids;
    }

    /**
     * Generated from protobuf field <code>repeated string completed_ids = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCompletedIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->completed_ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string ids_to_process = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIdsToProcess()
    {
        return $this->ids_to_process;
    }

    /**
     * Generated from protobuf field <code>repeated string ids_to_process = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIdsToProcess($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ids_to_process = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.bulkprocess.Status status = 4;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.bulkprocess.Status status = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Bulkprocess\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.bulkprocess.Operation operation = 5;</code>
     * @return int
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Generated from protobuf field <code>.bulkprocess.Operation operation = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkEnum($var, \Bulkprocess\Operation::class);
        $this->operation = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string process_id = 6;</code>
     * @return string
     */
    public function getProcessId()
    {
        return $this->process_id;
    }

    /**
     * Generated from protobuf field <code>string process_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setProcessId($var)
    {
        GPBUtil::checkString($var, True);
        $this->process_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.bulkprocess.Entity entity = 7;</code>
     * @return int
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Generated from protobuf field <code>.bulkprocess.Entity entity = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setEntity($var)
    {
        GPBUtil::checkEnum($var, \Bulkprocess\Entity::class);
        $this->entity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string failed_ids = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFailedIds()
    {
        return $this->failed_ids;
    }

    /**
     * Generated from protobuf field <code>repeated string failed_ids = 8;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFailedIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->failed_ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string remote_host = 9;</code>
     * @return string
     */
    public function getRemoteHost()
    {
        return $this->remote_host;
    }

    /**
     * Generated from protobuf field <code>string remote_host = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setRemoteHost($var)
    {
        GPBUtil::checkString($var, True);
        $this->remote_host = $var;

        return $this;
    }

}

