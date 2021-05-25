<?php


namespace DesignPatterns\Behavioral\Memento\Examples;


class GamePlayer
{
    /**
     * @var GameMemento[]
     */
    private array $gameMementoList;

    public function archive(GameMemento $gameMemento)
    {
        $this->gameMementoList[] = $gameMemento;
    }

    public function restore(int $index): ?GameMemento
    {
        if (isset($this->gameMementoList[$index])) {
            return $this->gameMementoList[$index];
        }

        throw new \InvalidArgumentException('Invalid state given');
    }
}