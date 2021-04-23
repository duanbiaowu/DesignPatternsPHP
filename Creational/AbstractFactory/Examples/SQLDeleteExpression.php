<?php


namespace DesignPatterns\Creational\AbstractFactory\Examples;


class SQLDeleteExpression implements DeleteExpression
{
    public function toString(): string
    {
        return 'DELETE FROM ...';
    }
}