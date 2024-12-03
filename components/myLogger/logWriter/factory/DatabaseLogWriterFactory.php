<?php

declare(strict_types=1);

namespace app\components\myLogger\logWriter\factory;

use app\components\myLogger\logWriter\DatabaseLogWriter;
use app\components\myLogger\logWriter\LogWriterInterface;

class DatabaseLogWriterFactory implements LogWriterFactoryInterface
{

    public function create(): LogWriterInterface
    {
        return new DatabaseLogWriter();
    }
}
