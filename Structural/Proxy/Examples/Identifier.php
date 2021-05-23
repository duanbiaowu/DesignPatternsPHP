<?php


namespace DesignPatterns\Structural\Proxy\Examples;


interface Identifier
{
    public function getUserByToken(string $token);
}