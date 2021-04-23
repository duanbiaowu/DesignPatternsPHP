<?php


namespace DesignPatterns\Creational\AbstractFactory\Examples;


class SQLExpressionFactory implements ExpressionFactory
{
    public function createSelectExpression(): SelectExpression
    {
        return new SQLSelectExpression();
    }

    public function createDeleteExpression(): DeleteExpression
    {
        return new SQLDeleteExpression();
    }
}