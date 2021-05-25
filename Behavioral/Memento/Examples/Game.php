<?php


namespace DesignPatterns\Behavioral\Memento\Examples;


class Game
{
    private string $state;

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    public function saveMemento(): GameMemento
    {
        return new GameMemento(clone $this);
    }

    public function getMementoState(GameMemento $gameMemento)
    {
        $this->state = $gameMemento->getGameState()->getState();
    }
}