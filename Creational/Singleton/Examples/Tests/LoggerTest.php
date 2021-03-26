<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Singleton\Examples\Tests;

use DesignPatterns\Creational\Singleton\Examples\Logger;
use PHPUnit\Framework\TestCase;

class LoggerTest extends TestCase
{
    public function testUniqueness()
    {
        $firstRedis = Logger::getInstance();
        $secondRedis = Logger::getInstance();

        $this->assertInstanceOf(Logger::class, $firstRedis);
        $this->assertSame($firstRedis, $secondRedis);
    }
}
