<?php

declare(strict_types=1);

namespace Uc\BulkProcess\BulkProcessExecutor\Exceptions;

use Exception;
use Throwable;

class UnableToGetBulkProcessException extends Exception
{
    public function __construct(string $message = "Unable to get bulk process status.", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}