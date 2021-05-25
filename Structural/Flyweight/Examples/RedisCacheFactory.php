<?php


namespace DesignPatterns\Structural\Flyweight\Examples;


class RedisCacheFactory implements \Countable
{
    /**
     * @var RedisCache[]
     */
    private array $redisPool;

    private function create(string $name)
    {
        return new RedisCache($name);
    }

    public function get(string $name)
    {
        if (!isset($this->redisPool[$name])) {
            $this->redisPool[$name] = $this->create($name);
        }

        return $this->redisPool[$name];
    }

    public function count()
    {
        return count($this->redisPool);
    }
}