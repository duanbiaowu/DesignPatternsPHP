<?php


namespace DesignPatterns\Creational\SimpleFactory\Examples;


class CacheFactory
{
    public function createMemory(): \SplFixedArray
    {
        return new \SplFixedArray(1024);
    }

    public function createRedis(): \Redis
    {
        return new \Redis();
    }
}