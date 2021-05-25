<?php


namespace DesignPatterns\Structural\Composite\Examples;


class InputElement implements FormElement
{
    private string $name;

    private string $type;

    /**
     * InputElement constructor.
     * @param string $name
     * @param string $type
     */
    public function __construct(string $name, string $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function render(): string
    {
        return '<input type="' . $this->type . '" name="' . $this->name . '" />';
    }
}