<?php

namespace DesignPatterns\Structural\Adapter\Examples\Tests;

use DesignPatterns\Structural\Adapter\Examples\MacKeyboard;
use DesignPatterns\Structural\Adapter\Examples\MacKeyboardAdapter;
use PHPUnit\Framework\TestCase;

class MacKeyboardAdapterTest extends TestCase
{
    public function testCanCopyOnMacLikeOnWindows()
    {
        $macKeyboard = new MacKeyboard();
        $boardAdapter = new MacKeyboardAdapter($macKeyboard);

        $this->assertSame('CMD+C', $boardAdapter->copy());
    }

    public function testCanPasteOnMacLIkeOnWindows()
    {
        $macKeyboard = new MacKeyboard();
        $boardAdapter = new MacKeyboardAdapter($macKeyboard);

        $this->assertSame('CMD+V', $boardAdapter->paste());
    }
}
