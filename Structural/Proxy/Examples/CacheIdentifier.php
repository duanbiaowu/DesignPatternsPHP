<?php


namespace DesignPatterns\Structural\Proxy\Examples;


class CacheIdentifier implements Identifier
{
    private DataBaseIdentifier $identifier;

    private array $data = [];

    /**
     * CacheIdentifier constructor.
     * @param DataBaseIdentifier $identifier
     */
    public function __construct(DataBaseIdentifier $identifier)
    {
        $this->identifier = $identifier;
    }

    public function getUserByToken(string $token): ?array
    {
        if (!isset($this->data[$token])) {
            $result = $this->identifier->getUserByToken($token);
            $this->data[$token] = $result;
        }

        return $this->data[$token];
    }
}