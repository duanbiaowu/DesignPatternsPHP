<?php


namespace DesignPatterns\Behavioral\Command\Examples;


class UserDisableCommand implements Command
{
    private UserReceiver $user;

    /**
     * UserDisableCommand constructor.
     * @param UserReceiver $user
     */
    public function __construct(UserReceiver $user)
    {
        $this->user = $user;
    }

    public function execute()
    {
        $this->user->disableState();;
    }

    public function undo()
    {
        $this->user->enableState();
    }
}