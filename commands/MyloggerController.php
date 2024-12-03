<?php

declare(strict_types=1);

namespace app\commands;

use app\components\myLogger\MyLogger;
use yii\console\Controller;
use yii\console\ExitCode;

class MyloggerController extends Controller
{
    public function actionLog(string $message): int
    {
        /** @var MyLogger $myLogger */
        $myLogger = \Yii::$app->myLogger;
        $myLogger->send($message);

        return ExitCode::OK;
    }

    public function actionLogTo(string $type, string $message): int
    {
        /** @var MyLogger $myLogger */
        $myLogger = \Yii::$app->myLogger;
        $myLogger->sendByLogger(message: $message, loggerType: $type);

        return ExitCode::OK;
    }

    public function actionLogToAll(string $message): int
    {
        /** @var MyLogger $myLogger */
        $myLogger = \Yii::$app->myLogger;
        $myLogger->sendByLogger(message: $message, loggerType: 'email');
        $myLogger->sendByLogger(message: $message, loggerType: 'file');
        $myLogger->sendByLogger(message: $message, loggerType: 'database');

        return ExitCode::OK;
    }
}
