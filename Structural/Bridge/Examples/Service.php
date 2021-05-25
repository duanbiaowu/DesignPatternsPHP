<?php


namespace DesignPatterns\Structural\Bridge\Examples;


abstract class Service
{
    protected UserFormatter $userFormatter;

    /**
     * Service constructor.
     * @param UserFormatter $userFormatter
     */
    public function __construct(UserFormatter $userFormatter)
    {
        $this->userFormatter = $userFormatter;
    }

    /**
     * @param UserFormatter $userFormatter
     */
    public function setUserFormatter(UserFormatter $userFormatter): void
    {
        $this->userFormatter = $userFormatter;
    }

    abstract public function get(): string;
}