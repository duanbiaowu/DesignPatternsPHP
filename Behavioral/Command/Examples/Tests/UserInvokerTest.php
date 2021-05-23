<?php

namespace DesignPatterns\Behavioral\Command\Examples\Tests;

use DesignPatterns\Behavioral\Command\Examples\UserDisableCommand;
use DesignPatterns\Behavioral\Command\Examples\UserEnableCommand;
use DesignPatterns\Behavioral\Command\Examples\UserInvoker;
use DesignPatterns\Behavioral\Command\Examples\UserReceiver;
use PHPUnit\Framework\TestCase;

class UserInvokerTest extends TestCase
{
    public function testReceiverStateWithSingleTimeInvoke()
    {
        $receiver = new UserReceiver();

        $enableCommand = new UserEnableCommand($receiver);
        $disableCommand = new UserDisableCommand($receiver);

        $invoker = new UserInvoker($enableCommand, $disableCommand);

        $invoker->pushEnableButton();
        $this->assertTrue($receiver->getState());

        $invoker->pushDisableButton();
        $this->assertFalse($receiver->getState());

        // reverse operation
        $invoker->pushDisableButton();
        $this->assertFalse($receiver->getState());

        $invoker->pushEnableButton();
        $this->assertTrue($receiver->getState());
    }

    public function testReceiverStateWithMultiTimeAndUndoInvoke()
    {
        $receiver = new UserReceiver();

        $enableCommand = new UserEnableCommand($receiver);
        $disableCommand = new UserDisableCommand($receiver);

        $invoker = new UserInvoker($enableCommand, $disableCommand);

        $invoker->pushEnableButton();
        $invoker->pushDisableButton();
        $this->assertFalse($receiver->getState());

        $invoker->pushUndoButton();
        $this->assertTrue($receiver->getState());

        $invoker->pushDisableButton();
        $invoker->pushEnableButton();
        $invoker->pushUndoButton();
        $this->assertFalse($receiver->getState());
    }
}
