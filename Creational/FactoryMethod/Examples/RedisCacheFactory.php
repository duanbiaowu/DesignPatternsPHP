<?php


namespace DesignPatterns\Creational\FactoryMethod\Examples;


class RedisCacheFactory implements CacheFactory
{
    private string $host;

    private int $port;

    private float $timeout;

    private ?string $password;

    /**
     * RedisCacheFactory constructor.
     * @param string $host
     * @param int $port
     * @param float $timeout
     * @param string|null $password
     */
    public function __construct(
        string $host = '127.0.0.1',
        int $port = 6379,
        float $timeout = 3.0,
        string $password = '')
    {
        $this->host = $host;
        $this->port = $port;
        $this->timeout = $timeout;
        $this->password = $password;
    }

    public function createCache(): Cache
    {
        return new RedisCache($this->host, $this->port, $this->timeout, $this->password);
    }
}