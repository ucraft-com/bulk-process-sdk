<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/bulk-process.proto

namespace GPBMetadata\Proto;

class BulkProcess
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
proto/bulk-process.protobulkprocess"�
BulkProcess

project_id (
completed_ids (	
ids_to_process (	#
status (2.bulkprocess.Status)
	operation (2.bulkprocess.Operation

process_id (	#
entity (2.bulkprocess.Entity

failed_ids (	
remote_host	 (	
workspace_name
 (	":
BulkProcessArray&
data (2.bulkprocess.BulkProcess"�
BulkProcessNotificationRequest

process_id (	
completed_Ids (	

failed_Ids (	#
status (2.bulkprocess.Status"�
CreateBulkProcessRequest

project_id (
ids_to_process (	#
entity (2.bulkprocess.Entity)
	operation (2.bulkprocess.Operation
remote_host	 (	
workspace_name
 (	"1
GetBulkProcessStatusRequest

process_id (	"6
GetBulkProcessStatusByIdRequest
process_ids (	*r
	Operation

CREATE 

UPDATE

DELETE
PUBLISH

UN_PUBLISH
MAKE_VISIBLE
MAKE_INVISIBLE*<
Status
INITIAL 
IN_PROGRESS
DONE

FAILED*�
Entity
PRODUCT 	
EVENT
COLLECTION_ITEM
CATEGORY
COLLECTION_CATEGORY
	ATTRIBUTE	
FIELD

COLLECTION
ATTRIBUTE_FAMILY
CUSTOMER	
CUSTOMER_GROUP

PRODUCT_REVIEW
	CART_RULE
PAGE
TEAM
BOOKING
EVENT_CATEGORY
BOOKING_CATEGORY

RENTAL
RENTAL_CATEGORY
SUBSCRIPTION
SUBSCRIPTION_CATEGORY2�
BulkProcessServiceT
CreateBulkProcess%.bulkprocess.CreateBulkProcessRequest.bulkprocess.BulkProcessZ
GetBulkProcessStatus(.bulkprocess.GetBulkProcessStatusRequest.bulkprocess.BulkProcessh
GetBulkProcessStatusByIds,.bulkprocess.GetBulkProcessStatusByIdRequest.bulkprocess.BulkProcessArray2}
BulkProcessNotificationService[
handleNotification+.bulkprocess.BulkProcessNotificationRequest.bulkprocess.BulkProcessbproto3'
        , true);

        static::$is_initialized = true;
    }
}

