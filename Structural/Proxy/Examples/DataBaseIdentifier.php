<?php


namespace DesignPatterns\Structural\Proxy\Examples;


class DataBaseIdentifier implements Identifier
{
    private array $data = [
        'qwerty' => [
            'username' => 'dev',
            'email' => 'codean.net@gmail.com',
            'password' => '123456',
        ]
    ];

    public function getUserByToken(string $token): ?array
    {
        return $this->data[$token] ?? null;
    }

    public function removeUserByToken(string $token)
    {
        if (isset($this->data[$token])) {
            unset($this->data[$token]);
        }
    }
}