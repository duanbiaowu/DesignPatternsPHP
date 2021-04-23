<?php


namespace DesignPatterns\Creational\AbstractFactory\Examples;


class NoSQLSelectExpression implements SelectExpression
{
    public function toString(): string
    {
        return 'GET ...';
    }
}