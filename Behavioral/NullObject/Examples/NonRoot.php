<?php


namespace DesignPatterns\Behavioral\NullObject\Examples;


class NonRoot implements User
{
    public function suRoot()
    {
        echo 'Password: ';
    }
}