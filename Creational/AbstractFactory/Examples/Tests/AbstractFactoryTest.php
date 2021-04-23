<?php

namespace DesignPatterns\Creational\AbstractFactory\Examples\Tests;

use DesignPatterns\Creational\AbstractFactory\Examples\DeleteExpression;
use DesignPatterns\Creational\AbstractFactory\Examples\ExpressionFactory;
use DesignPatterns\Creational\AbstractFactory\Examples\NoSQLExpressionFactory;
use DesignPatterns\Creational\AbstractFactory\Examples\SelectExpression;
use DesignPatterns\Creational\AbstractFactory\Examples\SQLExpressionFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function dateProvider(): array
    {
        return [
            [new SQLExpressionFactory()],
            [new NoSQLExpressionFactory()],
        ];
    }

    /**
     * @dataProvider dateProvider
     * @param ExpressionFactory $expressionFactory
     */
    public function testCreateSQLExpression(ExpressionFactory $expressionFactory)
    {
        $this->assertInstanceOf(SelectExpression::class, $expressionFactory->createSelectExpression());
        $this->assertInstanceOf(DeleteExpression::class, $expressionFactory->createDeleteExpression());
    }
}
