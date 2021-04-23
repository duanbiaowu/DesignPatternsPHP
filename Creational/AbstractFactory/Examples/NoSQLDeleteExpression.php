<?php


namespace DesignPatterns\Creational\AbstractFactory\Examples;


class NoSQLDeleteExpression implements DeleteExpression
{
    public function toString(): string
    {
        return 'DEL ...';
    }
}