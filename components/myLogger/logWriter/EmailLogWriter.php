<?php

declare(strict_types=1);

namespace app\components\myLogger\logWriter;

class EmailLogWriter implements LogWriterInterface
{

    public function log(string $message): void
    {
        echo "email log message: $message\n";
    }
}
