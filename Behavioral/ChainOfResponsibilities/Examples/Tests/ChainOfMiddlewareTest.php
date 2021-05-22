<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Examples\Tests;

use DesignPatterns\Behavioral\ChainOfResponsibilities\Examples\BlackListMiddleware;
use DesignPatterns\Behavioral\ChainOfResponsibilities\Examples\Middleware;
use DesignPatterns\Behavioral\ChainOfResponsibilities\Examples\PermissionMiddleware;
use DesignPatterns\Behavioral\ChainOfResponsibilities\Examples\UserMiddleware;
use PHPUnit\Framework\TestCase;

class ChainOfMiddlewareTest extends TestCase
{
    private Middleware $middleware;

    protected function setUp(): void
    {
        $this->middleware = new UserMiddleware();

        $this->middleware->add(new BlackListMiddleware())
            ->add(new PermissionMiddleware());
    }

    public function testInvalidEmail()
    {
        $this->assertFalse($this->middleware->handle('test@example.com', '123456'));

        $this->expectOutputString('Invalid email or password' . PHP_EOL);
    }

    public function testOnTheBlacklistEmail()
    {
        $this->assertFalse($this->middleware->handle('duanbiaowu@black.com', '123456'));

        $this->expectOutputString('The email has been disabled' . PHP_EOL);
    }

    public function testNoPermissionEmail()
    {
        $this->assertFalse($this->middleware->handle('duanbiaowu@163.com', '123456'));

        $this->expectOutputString('The request was forbidden' . PHP_EOL);
    }

    public function testHasPermissionEmail()
    {
        $this->assertTrue($this->middleware->handle('codean.net@gmail.com', '123456'));
    }
}
