<?php

namespace DesignPatterns\Behavioral\Mediator\Examples\Tests;

use DesignPatterns\Behavioral\Mediator\Examples\Buyer;
use DesignPatterns\Behavioral\Mediator\Examples\HomeBuyerSellerMediator;
use DesignPatterns\Behavioral\Mediator\Examples\Seller;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testGetBuyerNameAndSellerName()
    {
        $mediator = new HomeBuyerSellerMediator(new Buyer(), new Seller());

        $this->assertSame('buyer', $mediator->getBuyerName());
        $this->assertSame('seller', $mediator->getSellerName());
    }
}
