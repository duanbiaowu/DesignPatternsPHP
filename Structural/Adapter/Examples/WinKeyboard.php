<?php


namespace DesignPatterns\Structural\Adapter\Examples;


class WinKeyboard implements Keyboard
{
    public function copy(): string
    {
        return 'CTRL+C';
    }

    public function paste(): string
    {
        return 'CTRL+V';
    }
}