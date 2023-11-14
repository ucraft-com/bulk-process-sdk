<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/bulk-process.proto

namespace Bulkprocess;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bulkprocess.GetBulkProcessStatusByIdRequest</code>
 */
class GetBulkProcessStatusByIdRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string process_ids = 1;</code>
     */
    private $process_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $process_ids
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\BulkProcess::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string process_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProcessIds()
    {
        return $this->process_ids;
    }

    /**
     * Generated from protobuf field <code>repeated string process_ids = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProcessIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->process_ids = $arr;

        return $this;
    }

}

