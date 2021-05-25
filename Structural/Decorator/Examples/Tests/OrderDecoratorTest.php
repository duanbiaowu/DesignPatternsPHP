<?php

namespace DesignPatterns\Structural\Decorator\Examples\Tests;

use DesignPatterns\Structural\Decorator\Examples\Discount;
use DesignPatterns\Structural\Decorator\Examples\FullReduction;
use DesignPatterns\Structural\Decorator\Examples\OriginalOrder;
use PHPUnit\Framework\TestCase;

class OrderDecoratorTest extends TestCase
{
    public function testCanCalculatePriceForOriginalOrder()
    {
        $order = new OriginalOrder();

        $this->assertSame(500.00, $order->calculatePrice());
    }

    public function testCanCalculatePriceForOriginalOrderWithDiscount()
    {
        $order = new OriginalOrder();
        $order = new Discount($order);

        $this->assertSame(400.00, $order->calculatePrice());
    }

    public function testCanCalculatePriceForOriginalOrderWithDiscountAndFullReduction()
    {
        $order = new OriginalOrder();
        $order = new Discount($order);
        $order = new FullReduction($order);

        $this->assertSame(370.00, $order->calculatePrice());
    }
}
