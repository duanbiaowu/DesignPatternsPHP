<?php


namespace DesignPatterns\Behavioral\NullObject\Examples;


class Service
{
    private User $user;

    /**
     * Service constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function suRoot()
    {
        $this->user->suRoot();
    }
}