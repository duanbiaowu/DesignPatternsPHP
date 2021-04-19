<?php


namespace DesignPatterns\Creational\FactoryMethod\Examples;


class MemoryCache implements Cache
{
    private array $array = [];

    public function get(string $key)
    {
        if (isset($this->array[$key])) {
            return $this->array[$key];
        }
    }

    public function set(string $key, $value)
    {
        $this->array[$key] = $value;
    }
}