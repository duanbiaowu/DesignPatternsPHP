<?php


namespace DesignPatterns\Behavioral\Memento\Examples;


class GameMemento
{
    private Game $gameState;

    /**
     * GameMemento constructor.
     * @param Game $gameState
     */
    public function __construct(Game $gameState)
    {
        $this->gameState = $gameState;
    }

    /**
     * @return Game
     */
    public function getGameState(): Game
    {
        return $this->gameState;
    }
}