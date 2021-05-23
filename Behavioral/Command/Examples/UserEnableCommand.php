<?php


namespace DesignPatterns\Behavioral\Command\Examples;


class UserEnableCommand implements Command
{
    private UserReceiver $user;

    /**
     * UserEnableCommand constructor.
     * @param UserReceiver $user
     */
    public function __construct(UserReceiver $user)
    {
        $this->user = $user;
    }

    public function execute()
    {
        $this->user->enableState();
    }

    public function undo()
    {
        $this->user->disableState();;
    }
}