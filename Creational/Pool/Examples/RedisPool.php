<?php


namespace DesignPatterns\Creational\Pool\Examples;


class RedisPool implements \Countable
{
    /**
     * @var \Redis[]
     */
    private array $occupiedRedis = [];

    /**
     * @var \Redis[]
     */
    private array $freeRedis = [];

    public function get(): \Redis
    {
        if (count($this->freeRedis) === 0) {
            $redis = new \Redis();
        } else {
            $redis = array_pop($this->freeRedis);
        }

        $this->occupiedRedis[spl_object_hash($redis)] = $redis;

        return $redis;
    }

    public function dispose(\Redis $redis)
    {
        $key = spl_object_hash($redis);

        if (isset($this->occupiedRedis[$key])) {
            unset($this->occupiedRedis[$key]);
            $this->freeRedis[$key] = $redis;
        }
    }

    public function count()
    {
        return count($this->occupiedRedis) + count($this->freeRedis);
    }
}