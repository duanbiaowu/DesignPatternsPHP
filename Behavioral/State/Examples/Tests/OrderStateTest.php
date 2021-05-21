<?php

namespace DesignPatterns\Behavioral\State\Examples\Tests;

use DesignPatterns\Behavioral\State\Examples\OrderContext;
use PHPUnit\Framework\TestCase;

class OrderStateTest extends TestCase
{
    public function testIsCreatedWithOrderStateCreated()
    {
        $orderContext = OrderContext::create();

        $this->assertSame('created', (string)$orderContext);
    }

    public function testCanProceedToOrderStateShipped()
    {
        $orderContext = OrderContext::create();
        $orderContext->proceedToNext();

        $this->assertSame('shipped', (string)$orderContext);
    }

    public function testCanProceedToOrderStateConfirmed()
    {
        $orderContext = OrderContext::create();
        $orderContext->proceedToNext();
        $orderContext->proceedToNext();

        $this->assertSame('confirmed', (string)$orderContext);
    }

    public function testCanProceedToOrderStateDone()
    {
        $orderContext = OrderContext::create();
        $orderContext->proceedToNext();
        $orderContext->proceedToNext();
        $orderContext->proceedToNext();

        $this->assertSame('done', (string)$orderContext);
    }

    public function testStateDoneIsTheLastPossibleState()
    {
        $orderContext = OrderContext::create();
        $orderContext->proceedToNext();
        $orderContext->proceedToNext();
        $orderContext->proceedToNext();

        $orderContext->proceedToNext();
        $this->assertSame('done', (string)$orderContext);
    }
}
