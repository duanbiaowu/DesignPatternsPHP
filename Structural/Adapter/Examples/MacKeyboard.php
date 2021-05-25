<?php


namespace DesignPatterns\Structural\Adapter\Examples;


class MacKeyboard implements Keyboard
{
    public function copy(): string
    {
        return 'CMD+C';
    }

    public function paste(): string
    {
        return 'CMD+V';
    }
}