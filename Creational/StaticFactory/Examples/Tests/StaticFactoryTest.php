<?php

namespace DesignPatterns\Creational\StaticFactory\Examples\Tests;

use DesignPatterns\Creational\StaticFactory\Examples\JsonFormatter;
use DesignPatterns\Creational\StaticFactory\Examples\StaticFactory;
use DesignPatterns\Creational\StaticFactory\Examples\XmlFormatter;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateJsonFormatter()
    {
        $this->assertInstanceOf(JsonFormatter::class, StaticFactory::factory('json'));
    }

    public function testCanCreateXmlFormatter()
    {
        $this->assertInstanceOf(XmlFormatter::class, StaticFactory::factory('xml'));
    }

    public function testCanThrowInvalidArgumentException()
    {
        $this->expectException(\InvalidArgumentException::class);

        StaticFactory::factory('binary');
    }
}
