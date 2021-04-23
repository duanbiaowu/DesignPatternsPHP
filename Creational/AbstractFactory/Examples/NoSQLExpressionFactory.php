<?php


namespace DesignPatterns\Creational\AbstractFactory\Examples;


class NoSQLExpressionFactory implements ExpressionFactory
{
    public function createSelectExpression(): SelectExpression
    {
        return new NoSQLSelectExpression();
    }

    public function createDeleteExpression(): DeleteExpression
    {
        return new NoSQLDeleteExpression();
    }
}