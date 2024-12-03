<?php

declare(strict_types=1);

namespace app\components\myLogger\logWriter\factory;

use app\components\myLogger\logWriter\LogWriterInterface;

interface LogWriterFactoryInterface
{
    public function create(): LogWriterInterface;
}
