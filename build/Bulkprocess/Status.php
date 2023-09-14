<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/bulk-process.proto

namespace Bulkprocess;

use UnexpectedValueException;

/**
 * Protobuf type <code>bulkprocess.Status</code>
 */
class Status
{
    /**
     * Generated from protobuf enum <code>INITIAL = 0;</code>
     */
    const INITIAL = 0;
    /**
     * Generated from protobuf enum <code>IN_PROGRESS = 1;</code>
     */
    const IN_PROGRESS = 1;
    /**
     * Generated from protobuf enum <code>DONE = 2;</code>
     */
    const DONE = 2;
    /**
     * Generated from protobuf enum <code>FAILED = 3;</code>
     */
    const FAILED = 3;

    private static $valueToName = [
        self::INITIAL => 'INITIAL',
        self::IN_PROGRESS => 'IN_PROGRESS',
        self::DONE => 'DONE',
        self::FAILED => 'FAILED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

