<?php


namespace DesignPatterns\Creational\AbstractFactory\Examples;


class SQLSelectExpression implements SelectExpression
{
    public function toString(): string
    {
        return 'SELECT * FROM ...';
    }
}