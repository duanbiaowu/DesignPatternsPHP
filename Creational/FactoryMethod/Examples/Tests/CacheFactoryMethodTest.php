<?php

namespace DesignPatterns\Creational\FactoryMethod\Examples\Tests;

use DesignPatterns\Creational\FactoryMethod\Examples\MemoryCache;
use DesignPatterns\Creational\FactoryMethod\Examples\MemoryCacheFactory;
use DesignPatterns\Creational\FactoryMethod\Examples\RedisCache;
use DesignPatterns\Creational\FactoryMethod\Examples\RedisCacheFactory;
use PHPUnit\Framework\TestCase;

class CacheFactoryMethodTest extends TestCase
{
    public function testCreateMemoryCache()
    {
        $factory = new MemoryCacheFactory();
        $cache = $factory->createCache();

        $this->assertInstanceOf(MemoryCache::class, $cache);
    }

    public function testCreateRedisCache()
    {
        $factory = new RedisCacheFactory();
        $cache = $factory->createCache();

        $this->assertInstanceOf(RedisCache::class, $cache);
    }
}
