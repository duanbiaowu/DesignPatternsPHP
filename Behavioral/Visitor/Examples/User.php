<?php


namespace DesignPatterns\Behavioral\Visitor\Examples;


class User implements Role
{
    private string $name;

    /**
     * User constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function accept(RoleVisitor $visitor)
    {
        $visitor->visitUser($this);
    }
}