<?php

namespace DesignPatterns\Behavioral\Memento\Examples\Tests;

use DesignPatterns\Behavioral\Memento\Examples\Game;
use DesignPatterns\Behavioral\Memento\Examples\GamePlayer;
use PHPUnit\Framework\TestCase;

class GameMementoTest extends TestCase
{
    public function testArchiveGameStateAndRestoreGameState()
    {
        $game = new Game();
        $player = new GamePlayer();

        $game->setState('The first level starting...');
        $player->archive($game->saveMemento());

        $game->setState('The first level ending...');
        $player->archive($game->saveMemento());

        $game->setState('The second level starting...');
        $this->assertSame('The second level starting...', $game->getState());

        $game->getMementoState($player->restore(0));
        $this->assertSame('The first level starting...', $game->getState());
    }

    public function testThrowExceptionWhenRestoreInvalidGameState()
    {
        $game = new Game();
        $player = new GamePlayer();

        $this->expectException(\InvalidArgumentException::class);
        $game->getMementoState($player->restore(0));
    }
}
