<?php

declare(strict_types=1);

namespace Uc\BulkProcess\BulkProcessExecutor\Enums;

use Bulkprocess\Entity as ProtoEntityEnum;

enum Entity: int
{
    case PRODUCT = 0;
    case CATEGORY = 1;
    case ATTRIBUTE = 2;
    case COLLECTION_ITEM = 3;
    case CUSTOMER = 4;
    case CUSTOMER_GROUP = 5;
    case DISCOUNT = 6;
    case ATTRIBUTE_FAMILY = 7;
    case COLLECTION = 8;
    case PAGE = 9;
    case TEAM = 10;
}
