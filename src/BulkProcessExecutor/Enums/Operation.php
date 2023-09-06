<?php

declare(strict_types=1);

namespace Uc\BulkProcess\BulkProcessExecutor\Enums;

use Bulkprocess\Operation as ProtoOperation;

enum Operation: int
{
    case CREATE = 0;
    case UPDATE = 1;
    case DELETE = 2;
    case PUBLISH = 3;
    case UN_PUBLISH = 4;
}