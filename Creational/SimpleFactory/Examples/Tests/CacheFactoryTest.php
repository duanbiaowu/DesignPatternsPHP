<?php

namespace DesignPatterns\Creational\SimpleFactory\Examples\Tests;

use DesignPatterns\Creational\SimpleFactory\Examples\CacheFactory;
use PHPUnit\Framework\TestCase;

class CacheFactoryTest extends TestCase
{
    public function testCreateMemory()
    {
        $cache = (new CacheFactory())->createMemory();
        $this->assertInstanceOf(\SplFixedArray::class, $cache);
    }

    public function testCreateRedis()
    {
        $cache = (new CacheFactory())->createRedis();
        $this->assertInstanceOf(\Redis::class, $cache);
    }
}
