<?php

declare(strict_types=1);

namespace Uc\BulkProcess\BulkProcessExecutor\Exceptions;

use Exception;
use Throwable;

class BulkProcessCreationFailedException extends Exception
{
    public function __construct(string $message = "Bulk process creation failed.", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}