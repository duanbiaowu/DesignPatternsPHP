<?php


namespace DesignPatterns\Creational\FactoryMethod\Examples;


class RedisCache implements Cache
{
    private ?\Redis $redis;

    /**
     * RedisCache constructor.
     * @param string $host
     * @param int $port
     * @param float $timeout
     * @param string $password
     */
    public function __construct(string $host, int $port, float $timeout, string $password)
    {
        $this->redis = new \Redis();
        $this->redis->connect($host, $port, $timeout);

        if ($password) {
            $this->redis->auth($password);
        }
    }

    public function get(string $key)
    {
        return $this->redis->get($key);
    }

    public function set(string $key, $value)
    {
        $this->redis->set($key, $value);
    }
}