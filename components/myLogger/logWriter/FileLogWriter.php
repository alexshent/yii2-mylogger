<?php

declare(strict_types=1);

namespace app\components\myLogger\logWriter;

class FileLogWriter implements LogWriterInterface
{

    public function log(string $message): void
    {
        echo "file log message: $message\n";
    }
}
