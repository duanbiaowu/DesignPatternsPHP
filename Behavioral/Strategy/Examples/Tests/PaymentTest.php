<?php

namespace DesignPatterns\Behavioral\Strategy\Examples\Tests;

use DesignPatterns\Behavioral\Strategy\Examples\AliPay;
use DesignPatterns\Behavioral\Strategy\Examples\OrderController;
use DesignPatterns\Behavioral\Strategy\Examples\WeChatPay;
use PHPUnit\Framework\TestCase;

class PaymentTest extends TestCase
{
    public function testCallAliPayService()
    {
        $mock = $this->getMockBuilder(AliPay::class)
            ->getMock();

        $mock->expects($this->once())
            ->method('auth')
            ->with($this->equalTo(['bar' => 'foo']));

        $mock->expects($this->once())
            ->method('pay')
            ->with($this->equalTo(['bar' => 'foo']));

        $controller = new OrderController($mock);
        $controller->auth(['bar' => 'foo']);
        $controller->pay(['bar' => 'foo']);
    }

    public function testCallWeChatPayService()
    {
        $mock = $this->getMockBuilder(WeChatPay::class)
            ->getMock();

        $mock->expects($this->once())
            ->method('refund')
            ->with($this->equalTo(['bar' => 'foo']));

        $mock->expects($this->once())
            ->method('notify')
            ->with($this->equalTo(['bar' => 'foo']));

        $controller = new OrderController($mock);
        $controller->refund(['bar' => 'foo']);
        $controller->notify(['bar' => 'foo']);
    }
}
