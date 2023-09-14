<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase as PHPUnit_TestCase;

class TestCase extends PHPUnit_TestCase
{
    public function __construct(string $name = 'BulkProcessSdk')
    {
        parent::__construct($name);
    }
}
