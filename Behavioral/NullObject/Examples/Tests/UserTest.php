<?php

namespace DesignPatterns\Behavioral\NullObject\Examples\Tests;

use DesignPatterns\Behavioral\NullObject\Examples\NonRoot;
use DesignPatterns\Behavioral\NullObject\Examples\Root;
use DesignPatterns\Behavioral\NullObject\Examples\Service;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testRoot()
    {
        $service = new Service(new Root());
        $this->expectOutputString('');
        $service->suRoot();
    }

    public function testNonRoot()
    {
        $service = new Service(new NonRoot());
        $this->expectOutputString('Password: ');
        $service->suRoot();
    }
}
