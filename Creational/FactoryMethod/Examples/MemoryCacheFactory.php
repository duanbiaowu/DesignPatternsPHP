<?php


namespace DesignPatterns\Creational\FactoryMethod\Examples;


class MemoryCacheFactory implements CacheFactory
{
    public function createCache(): Cache
    {
        return new MemoryCache();
    }
}