<?php


namespace DesignPatterns\Creational\AbstractFactory\Examples;


interface ExpressionFactory
{
    public function createSelectExpression(): SelectExpression;

    public function createDeleteExpression(): DeleteExpression;
}