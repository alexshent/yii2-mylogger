<?php

declare(strict_types=1);

namespace app\components\myLogger;

use app\components\myLogger\logWriter\factory\DatabaseLogWriterFactory;
use app\components\myLogger\logWriter\factory\EmailLogWriterFactory;
use app\components\myLogger\logWriter\factory\FileLogWriterFactory;
use app\components\myLogger\logWriter\LogWriterInterface;
use yii\base\Component;

class MyLogger extends Component implements LoggerInterface
{
    public string $type;
    public string $email;
    private ?LogWriterInterface $logWriter;

    public function __construct($config = [])
    {
        parent::__construct($config);
        $this->type = $config['type'];
        $this->email = $config['email'];
        $this->logWriter = $this->createLogWriter($this->type);
    }

    private function createLogWriter(string $type): ?LogWriterInterface
    {
        try {
            $logWriterFactory = match ($type) {
                'email' => new EmailLogWriterFactory(),
                'file' => new FileLogWriterFactory(),
                'database' => new DatabaseLogWriterFactory(),
            };
        } catch (\UnhandledMatchError $e) {
            echo "unknown log writer type $type\n";
            return null;
        }

        return $logWriterFactory->create();
    }

    public function send(string $message): void
    {
        $this->logWriter?->log($message);
    }

    public function sendByLogger(string $message, string $loggerType): void
    {
        $logWriter = $this->createLogWriter($loggerType);
        $logWriter?->log($message);
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
        $this->logWriter = $this->createLogWriter($this->type);
    }
}
