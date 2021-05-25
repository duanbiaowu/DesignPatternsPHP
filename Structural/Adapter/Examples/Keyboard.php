<?php


namespace DesignPatterns\Structural\Adapter\Examples;


interface Keyboard
{
    public function copy(): string;

    public function paste(): string;
}