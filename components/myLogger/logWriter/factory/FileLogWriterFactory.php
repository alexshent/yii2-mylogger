<?php

declare(strict_types=1);

namespace app\components\myLogger\logWriter\factory;

use app\components\myLogger\logWriter\FileLogWriter;
use app\components\myLogger\logWriter\LogWriterInterface;

class FileLogWriterFactory implements LogWriterFactoryInterface
{

    public function create(): LogWriterInterface
    {
        return new FileLogWriter();
    }
}
