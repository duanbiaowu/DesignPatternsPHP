<?php


namespace DesignPatterns\Behavioral\Mediator\Examples;


abstract class Colleague
{
    protected Mediator $mediator;

    /**
     * @param Mediator $mediator
     */
    public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }
}