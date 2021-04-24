<?php

namespace DesignPatterns\Creational\Pool\Examples\Tests;

use DesignPatterns\Creational\Pool\Examples\RedisPool;
use PHPUnit\Framework\TestCase;

class RedisPoolTest extends TestCase
{
    public function testNewInstanceWithMultiGet()
    {
        $pool = new RedisPool();
        $redis1 = $pool->get();
        $redis2 = $pool->get();

        $this->assertSame(2, $pool->count());
        $this->assertNotSame($redis1, $redis2);
    }

    public function testSameInstanceTwiceWhenDisposingItFirst()
    {
        $pool = new RedisPool();

        $redis1 = $pool->get();
        $pool->dispose($redis1);
        $redis2 = $pool->get();

        $this->assertSame(1, $pool->count());
        $this->assertSame($redis1, $redis2);
    }
}
