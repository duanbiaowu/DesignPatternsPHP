<?php


namespace DesignPatterns\Behavioral\Command\Examples;


class UserReceiver
{
    private bool $state = true;

    public function enableState()
    {
        $this->state = true;
    }

    public function disableState()
    {
        $this->state = false;
    }

    /**
     * @return bool
     */
    public function getState(): bool
    {
        return $this->state;
    }
}