<?php

declare(strict_types=1);

namespace app\components\myLogger\logWriter;

interface LogWriterInterface
{
    public function log(string $message): void;
}
