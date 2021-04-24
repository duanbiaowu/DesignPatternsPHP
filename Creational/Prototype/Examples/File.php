<?php


namespace DesignPatterns\Creational\Prototype\Examples;


class File implements Prototype
{
    private string $name;

    private \DateTime $createdTime;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->createdTime = new \DateTime();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedTime(): \DateTime
    {
        return $this->createdTime;
    }

    public function __clone()
    {
        $this->name = $this->name . '.copy';
        $this->createdTime = new \DateTime();
    }
}