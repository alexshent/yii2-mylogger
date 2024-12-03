<?php

declare(strict_types=1);

namespace app\components\myLogger\logWriter;

class DatabaseLogWriter implements LogWriterInterface
{

    public function log(string $message): void
    {
        echo "database log message: $message\n";
    }
}
