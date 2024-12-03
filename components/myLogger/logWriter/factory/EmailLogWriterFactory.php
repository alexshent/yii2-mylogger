<?php

declare(strict_types=1);

namespace app\components\myLogger\logWriter\factory;

use app\components\myLogger\logWriter\EmailLogWriter;
use app\components\myLogger\logWriter\LogWriterInterface;

class EmailLogWriterFactory implements LogWriterFactoryInterface
{

    public function create(): LogWriterInterface
    {
        return new EmailLogWriter();
    }
}
