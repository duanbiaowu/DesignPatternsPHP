<?php


namespace DesignPatterns\Structural\Flyweight\Examples;


class RedisCache implements Cache
{
    private string $name;

    /**
     * RedisCache constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}