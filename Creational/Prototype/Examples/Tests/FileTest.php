<?php

namespace DesignPatterns\Creational\Prototype\Examples\Tests;

use DesignPatterns\Creational\Prototype\Examples\File;
use DesignPatterns\Creational\Prototype\Examples\Prototype;
use PHPUnit\Framework\TestCase;

class FileTest extends TestCase
{
    public function testCopiedFile()
    {
        $file = new File('/tmp/prototype.txt');
        $copiedFile = clone $file;

        $this->assertInstanceOf(Prototype::class, $copiedFile);
    }

    public function testCopiedFileWithPrototypeFile()
    {
        $file = new File('/tmp/prototype.txt');
        $copiedFile = clone $file;

        $this->assertNotSame($file->getName(), $copiedFile->getName());
        $this->assertNotSame($file->getCreatedTime(), $copiedFile->getCreatedTime());
    }
}
