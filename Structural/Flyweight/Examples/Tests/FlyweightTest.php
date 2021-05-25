<?php

namespace DesignPatterns\Structural\Flyweight\Examples\Tests;

use DesignPatterns\Structural\Flyweight\Examples\RedisCacheFactory;
use PHPUnit\Framework\TestCase;

class FlyweightTest extends TestCase
{
    public function testFlyweight()
    {
        $factory = new RedisCacheFactory();

        for ($i = 0; $i < 10; $i++) {
            $redis = $factory->get('Redis-' . $i);
            $this->assertSame('Redis-' . $i, $redis->getName());
        }

        $this->assertCount(10, $factory);
    }
}
