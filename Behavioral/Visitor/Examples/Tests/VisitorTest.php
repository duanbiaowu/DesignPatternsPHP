<?php

namespace DesignPatterns\Behavioral\Visitor\Examples\Tests;

use DesignPatterns\Behavioral\Visitor\Examples\Group;
use DesignPatterns\Behavioral\Visitor\Examples\RecordingVisitor;
use DesignPatterns\Behavioral\Visitor\Examples\User;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    public function testVisitUserRole()
    {
        $visitor = new RecordingVisitor();
        $role = new User('dev');
        $role->accept($visitor);

        $this->assertSame([$role], $visitor->getVisited());
    }

    public function testVisitGroupRole()
    {
        $visitor = new RecordingVisitor();
        $role = new Group('www');
        $role->accept($visitor);

        $this->assertSame([$role], $visitor->getVisited());
    }
}
