<?php

declare(strict_types=1);

namespace Uc\BulkProcess\BulkProcessExecutor\Enums;

enum Entity: int
{
    case PRODUCT = 0;
    case EVENT = 1;
    case COLLECTION_ITEM = 2;
    case CATEGORY = 3;
    case COLLECTION_CATEGORY = 4;
    case ATTRIBUTE = 5;
    case FIELD = 6;
    case COLLECTION = 7;
    case ATTRIBUTE_FAMILY = 8;
    case CUSTOMER = 9;
    case CUSTOMER_GROUP = 10;
    case PRODUCT_REVIEW = 11;
    case CART_RULE = 12;
    case PAGE = 13;
    case TEAM = 14;
    case BOOKING = 15;
    case EVENT_CATEGORY = 16;
    case BOOKING_CATEGORY = 17;
    case RENTAL = 18;
    case RENTAL_CATEGORY = 19;
}
