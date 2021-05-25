<?php

namespace DesignPatterns\Structural\Bridge\Examples\Tests;

use DesignPatterns\Structural\Bridge\Examples\NormalUserFormatter;
use DesignPatterns\Structural\Bridge\Examples\UserService;
use DesignPatterns\Structural\Bridge\Examples\VipUserFormatter;
use PHPUnit\Framework\TestCase;

class UserBridgeTest extends TestCase
{
    public function testCanFormatUsingNormalUserFormatter()
    {
        $service = new UserService(new NormalUserFormatter());

        $this->assertSame('dev', $service->get());
    }

    public function testCanFormatUsingVipUserFormatter()
    {
        $service = new UserService(new VipUserFormatter());

        $this->assertSame('Vip User: dev', $service->get());
    }
}
