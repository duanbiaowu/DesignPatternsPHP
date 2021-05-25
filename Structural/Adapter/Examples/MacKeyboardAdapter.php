<?php


namespace DesignPatterns\Structural\Adapter\Examples;


class MacKeyboardAdapter implements Keyboard
{
    private MacKeyboard $macKeyboard;

    /**
     * MacKeyboardAdapter constructor.
     * @param MacKeyboard $macKeyboard
     */
    public function __construct(MacKeyboard $macKeyboard)
    {
        $this->macKeyboard = $macKeyboard;
    }

    public function copy(): string
    {
        return $this->macKeyboard->copy();
    }

    public function paste(): string
    {
        return $this->macKeyboard->paste();
    }
}