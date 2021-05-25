<?php


namespace DesignPatterns\Structural\Bridge\Examples;


class UserService extends Service
{
    public function get(): string
    {
        return $this->userFormatter->format('dev');
    }
}