<?php

namespace DesignPatterns\Behavioral\TemplateMethod\Examples\Tests;

use DesignPatterns\Behavioral\TemplateMethod\Examples\NonRootProcessor;
use DesignPatterns\Behavioral\TemplateMethod\Examples\RootProcessor;
use PHPUnit\Framework\TestCase;

class RBACProcessorTest extends TestCase
{
    public function testRootProcessorCanNotGetUserRoles()
    {
        $rootProcessor = new RootProcessor();
        $rootProcessor->hasPermission();

        $this->assertSame([
            'Checking state token...',
            'root',
            'Logging...',
        ], $rootProcessor->getProcessList());
    }

    public function testNonRootProcessorCanGetUserRoles()
    {
        $nonRootProcessor = new NonRootProcessor();
        $nonRootProcessor->hasPermission();

        $this->assertSame([
            'Checking state token...',
            'nonRoot',
            'Logging...',
            [
                'product manager',
                'project manager',
            ],
        ], $nonRootProcessor->getProcessList());
    }
}
