<?php declare(strict_types=1);


namespace DesignPatterns\Creational\Singleton\Examples;

use PHP_CodeSniffer\Tokenizers\PHP;

final class Logger
{
    private $fileHandle;

    private static ?Logger $instance = null;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
        throw new \Exception('Cannot unserialize singleton');
    }

    public static function getInstance(): Logger
    {
        if (self::$instance === null) {
            self::$instance = new Logger();
            self::$instance->fileHandle = fopen('php://stdout', 'w');
        }

        return self::$instance;
    }

    public static function log(string $message): void
    {
        $logger = self::getInstance();
        $logger->writeLog($message);
    }

    private function writeLog(string $message): void
    {
        fwrite($this->fileHandle, date('[Y-m-d H:i:s] ') . $message . PHP_EOL);
    }
}
