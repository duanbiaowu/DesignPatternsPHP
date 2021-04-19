<?php


namespace DesignPatterns\Creational\FactoryMethod\Examples;


interface CacheFactory
{
    public function createCache(): Cache;
}